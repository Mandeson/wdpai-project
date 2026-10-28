# AGENTS.md

Guidance for AI coding agents working on this repository.

## Project overview

**ferryway** — an early-stage university (WdPAI) web application in the ferry/booking domain
(connections, cabins, booking, login/register). Built **without a framework**: a custom
PHP MVC stack (front controller + regex router + controller→view rendering) running
entirely in Docker.

Current state: frontend-heavy. Controllers render mostly static views. **There is no
database layer yet** (no models, no PDO connection, no SQL/migrations), even though
PostgreSQL is provisioned. All existing routes are GET; form views (login, register,
book-cabin, book-details) have no POST handlers yet.

`README.md` is the canonical human-facing doc — keep it in sync when behavior changes.

## Tech stack & services

| Service | Image | Host port | Purpose |
|---|---|---|---|
| `server` | `nginx:stable-alpine` + `docker/nginx/nginx.conf` | `${APP_PORT:-8080}` | Serves `/app/public`, forwards `.php` to FastCGI `php:9000`, `try_files … /index.php?$query_string`, denies dotfiles |
| `php` | `docker/php/Dockerfile` (`php:8.3-fpm-alpine` + composer 2) | internal only | Extensions: pdo_pgsql, pgsql, gd, zip, opcache, bcmath |
| `db` | `postgres:16-alpine` | `${POSTGRES_PORT:-5433}` → 5432 | Init scripts mounted from `./docker/db` → `/docker-entrypoint-initdb.d` (currently empty of SQL) |
| `mailpit` | `axllent/mailpit` | `${MAILPIT_PORT:-8025}` | Mail capture UI (not yet wired into PHP code) |
| `pgadmin-wdpai` | `dpage/pgadmin4` | `${PGADMIN_PORT:-5050}` | DB admin UI |

All containers share the `pg-network` bridge network. Repo code is bind-mounted at `/app`
in both nginx and php containers. DB is reachable from PHP as host `db:5432`, from the
host as `localhost:5433`.

## Directory structure

```
composer.json               # PSR-4 autoload: App\ => src/, App\Controller\ => src/controllers/
docker-compose.yaml         # 5 services above (note: volumes: block is malformed)
docker/
  ├─ db/Dockerfile          # postgres 16
  ├─ nginx/{Dockerfile,nginx.conf}
  └─ php/Dockerfile
public/
  ├─ index.php              # front controller — all routes registered here
  ├─ views/*.html.php       # home, not-found, projects, project, connections,
  │                         # book-cabin, book-details, login, register
  └─ static/{css/*, script.js}   # module CSS per view + theme-switcher JS
src/
  ├─ Routing.php            # final class; regex router
  └─ controllers/           # AppController (abstract base) + DefaultController,
                            # ProjectController, ConnectionsController, StaticController
```

## Architecture

Request flow: browser → nginx (:8080) → FastCGI php-fpm (:9000) → `public/index.php` → router → controller → view.

- **`public/index.php`** — loads `vendor/autoload.php`, reserves `/static/*` for
  `StaticController::serve`, registers routes on `App\Routing`, dispatches;
  unmatched routes fall through to `DefaultController::notFound`.
- **`src/Routing.php`** — `get()/post()` register routes; `{param}` compiles to
  `(?P<param>\d+)` — **route parameters are numeric-only ints**. `dispatch()` returns
  bool, instantiates the controller (throws `RuntimeException` if not an
  `AppController` subclass) and passes numeric params as `int`.
- **`src/controllers/AppController.php`** — abstract base. `render($template, $variables)`
  uses `extract($variables, EXTR_SKIP)` then requires
  `public/views/{template}.html.php`.
- **Controllers** — `final`, one class per file, no constructor; actions are
  `public function name(int $param): void`.
- **`StaticController::serve()`** — serves files from `public/static` with a
  `realpath` path-traversal check and `mime_content_type`.

### Current routes (all GET, defined in `public/index.php`)

```
GET /                    → DefaultController::index
GET /projects            → ProjectController::index
GET /projects/{id}       → ProjectController::show      (id: int)
GET /connections         → ConnectionsController::index
GET /connections/{id}    → ConnectionsController::show  (id: int)
(anything else)          → 404 (not-found view)
```

### Database

**None implemented.** No SQL files, migrations, entities, or repositories in `src/`.
When adding one: use PDO (`pdo_pgsql` is already installed), connect to host `db`,
port `5432`, credentials from env; place init SQL in `docker/db/`.

## Commands

```bash
docker compose up --build -d   # start everything
docker compose down            # stop
php -l <file>                  # syntax check (only "test" available)
composer dump-autoload         # regenerate autoload after adding classes
```

No test framework, linter, or CI exists yet.

**URLs:** app http://localhost:8080 · pgAdmin http://localhost:5050 · Mailpit http://localhost:8025 · PostgreSQL localhost:5433

## Configuration / environment

`.env` in project root (gitignored) — all vars have defaults in compose:

```
APP_PORT=8080
POSTGRES_PORT=5433
POSTGRES_DB=app_db
POSTGRES_USER=app_user
POSTGRES_PASSWORD=app_password
PGADMIN_PORT=5050
PGADMIN_CONTAINER_NAME=pg-admin
PGADMIN_DEFAULT_EMAIL=admin@example.com
PGADMIN_DEFAULT_PASSWORD=admin_password
MAILPIT_PORT=8025
```

Secrets go **only** in `.env`. Never commit credentials.

## Conventions (follow these)

- PHP 8.3, `declare(strict_types=1);` at the top of every PHP file.
- Namespaces PSR-4: `App` → `src/`, `App\Controller` → `src/controllers/`
  (note the lowercase `controllers` directory name with capital `C` in the namespace).
- `final class` controllers extending `AppController`; actions return `void`.
- PSR-12 formatting (aligned params on multi-line method calls).
- Escape output with `htmlspecialchars()` in templates; keep the `realpath`
  check in `StaticController` intact.
- Comments are partly in **Polish** — match the surrounding language or stay neutral.
- UI copy mixes Polish and English; views use `lang="en-GB"` and the "ferryway" brand.
- Commits: small and logical, conventional-ish prefixes (`feat:`, `docs:`, `chore:`),
  short lowercase subjects.

## How to add a page

Adding a page means touching three layers: **route → controller action → view template**
(and optionally CSS). Since PSR-4 handles class loading, no `require` statements are needed
for controllers — file location and namespace must match, that's all.

### Step 1 — Register the route (`public/index.php`)

Add a line next to the existing route registrations:

```php
use App\Controller\BookingController; // add to the use block at the top

$routing->get('/booking', BookingController::class, 'index');
$routing->get('/booking/{id}', BookingController::class, 'show');
```

Rules to keep in mind:
- Routes are matched in **registration order**; first match wins. Put more
  specific paths (e.g. `/connections/{id}`) before less specific ones if they could collide.
- **`{param}` placeholders are numeric-only.** The router compiles them to
  `(?P<param>\d+)` — `/booking/abc` will 404, `/booking/12` works and arrives in
  the action as an `int`. Placeholders cannot be optional.
- Unmatched requests automatically get a 404 page — no fallback registration needed.
- For form submissions, `$routing->post(...)` works the same way (currently unused,
  since no view submits anywhere yet).

### Step 2 — Add a controller action

The action lives in a controller under `src/controllers/` (namespace `App\Controller`)
and must extend `AppController` — otherwise `Routing::dispatch()` throws
`RuntimeException('Invalid controller')` at runtime.

Reuse an existing controller when the page belongs to the same area:

```php
// src/controllers/ConnectionsController.php
public function show(int $id): void
{
    $this->render('connections', [
        'pageTitle' => 'Connections',
        'connectionId' => $id,
    ]);
}
```

Or create a new one — name it `{Domain}Controller.php` in `src/controllers/`:

```php
<?php

declare(strict_types=1);

namespace App\Controller;

final class BookingController extends AppController
{
    public function index(): void
    {
        $this->render('booking', [
            'pageTitle' => 'Booking',
        ]);
    }
}
```

Conventions: `final class`, no constructor, actions are `public function name(): void`,
route parameters are received as `int` in the same order as their `{param}`
placeholders in the URL. Variables passed to `render()` are `extract()`ed into
the template scope (`EXTR_SKIP`, so don't collide with existing variable names
like `$path` or `$routeFound` which don't leak in anyway — but keep names unique
among your own variables).

### Step 3 — Create the view template

The template must be **`public/views/{name}.html.php`**, where `{name}` is exactly
the string passed to `$this->render('booking', …)` — otherwise `require` fails.

Minimal template skeleton:

```php
<?php
/**
 * @var string $pageTitle
 */
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="/static/css/styles.css">
    <!-- optional per-view stylesheet: -->
    <link rel="stylesheet" href="/static/css/booking.css">
</head>
<body>
    <!-- shared navigation markup, mirroring existing views -->
    <main>
        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        ...
    </main>
    <script src="/static/script.js"></script>
</body>
</html>
```

- Always escape output with `htmlspecialchars()` — this is a hard rule in this project.
- Copy the head/nav/script markup from an existing view (e.g. `public/views/home.html.php`)
  rather than inventing a new skeleton, so pages stay consistent.
- `script.js` is the theme switcher (light/dark via `localStorage` key
  `ferryway_theme`); include it so the theme selector keeps working.

### Step 4 — (Optional) per-view styles

Shared styles live in `public/static/css/styles.css`; view-specific CSS goes in its
own module file (see `login.css`, `register.css`, `connections.css`, `book-cabin.css`,
`book-details.css`) and is linked **only from that view's template**. Follow the same
pattern: create `public/static/css/{name}.css` and add the `<link>` in your template.

Files under `/static/*` are served directly by `StaticController` (path-traversal
protected, MIME-detected) and never reach the router.

### Step 5 — Verify

```bash
docker compose up --build -d   # if not already running
php -l src/controllers/BookingController.php        # syntax check
curl -s http://localhost:8080/booking | head        # expect rendered HTML
curl -s -o /dev/null -w '%{http_code}' http://localhost:8080/booking/abc   # expect 404
```

Then check the page in the browser at http://localhost:8080/booking (code is
bind-mounted, so no container rebuild is needed after the first start).

### Checklist

- [ ] Route added in `public/index.php` (before the `dispatch()` call)
- [ ] Controller is `final`, extends `AppController`, has `declare(strict_types=1)`
- [ ] Template file named exactly `public/views/{render-name}.html.php`
- [ ] All dynamic output wrapped in `htmlspecialchars()`
- [ ] Reused existing head/nav/script markup from another view
- [ ] README.md endpoint table updated if the page is user-facing

## Known gaps (be aware, don't "fix" silently)

- Malformed `volumes:` block at the bottom of `docker-compose.yaml`
  (`pg-data`, `ollama_data` unused; trailing keys on one line).
- Form views have no POST routes despite `Routing::post()` support.
- `projects`/`project` views are template placeholders; the real domain is
  ferry connections/booking.
- Docker init-script dir `docker/db/` has no SQL yet.
