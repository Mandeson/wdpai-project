# Project template

A PHP web application with Docker, Nginx, PostgreSQL, pgAdmin, and Mailpit.

## Functions

| Area | What it does |
|---|---|
| Routing & MVC | Custom lightweight regex-based router dispatching to controller actions |
| Home page | Landing page displaying the welcome view (`/`) |
| Projects | Project list (`/projects`) and dynamic single project details view (`/projects/{id}`) |
| Error Handling | Custom 404 page for unmatched routes |
| Database | PostgreSQL 16 server for data storage |
| Database Management | pgAdmin 4 web UI for database administration |
| Mail Testing | Mailpit for capturing and viewing sent emails |

## Tech stack

| Layer | Technologies |
|---|---|
| Backend | PHP 8.3 (FPM) with PSR-4 autoloading & Composer 2 |
| Architecture | Custom MVC (Routing, Controllers, Views) |
| HTTP server | Nginx |
| Database | PostgreSQL 16 |
| Database Admin | pgAdmin 4 |
| Mail Testing | Mailpit |
| Containerization | Docker Compose |

### PHP Environment & Extensions

- **Composer**: 2.x (PSR-4 autoloading for `App\` and `App\Controller\`)
- **Extensions**: `pdo_pgsql`, `pgsql`, `gd` (with JPEG support), `zip`, `opcache`, `bcmath`
- **Configuration Defaults**:
  - `memory_limit = -1`
  - `upload_max_filesize = 512M`
  - `post_max_size = 512M`
  - `max_file_uploads = 20`

## Application Routing & Endpoints

| Method | URI | Controller Action | Description |
|---|---|---|---|
| `GET` | `/` | `DefaultController::index` | Home page view |
| `GET` | `/projects` | `ProjectController::index` | Projects overview list |
| `GET` | `/projects/{id}` | `ProjectController::show` | Single project view by numeric ID |
| `*` | *(unmatched)* | `DefaultController::notFound` | 404 Not Found response |

## Environment variables

Create a `.env` file in the project root with the required environment variables:

```env
APP_PORT=8080
POSTGRES_PORT=5433
POSTGRES_DB=app_db
POSTGRES_USER=app_user
POSTGRES_PASSWORD=app_password
PGADMIN_PORT=5050
PGADMIN_DEFAULT_EMAIL=admin@example.com
PGADMIN_DEFAULT_PASSWORD=admin_password
MAILPIT_PORT=8025
```

## Quick start

```bash
git clone https://github.com/Mandeson/wdpai-project.git
cd wdpai-project
docker compose up --build -d
```

### Services & Access URLs

- **Application**: http://localhost:8080
- **pgAdmin**: http://localhost:5050
- **Mailpit Web UI**: http://localhost:8025
- **PostgreSQL**: `localhost:5433`

## Project structure

```
wdpai-project/
├── composer.json          # Composer PSR-4 autoload configuration
├── docker-compose.yaml
├── docker/                # Docker configuration files
│   ├── db/
│   │   └── Dockerfile
│   ├── nginx/
│   │   ├── Dockerfile
│   │   └── nginx.conf
│   └── php/
│       └── Dockerfile
├── public/                # Publicly accessible application root
│   ├── index.php          # Front controller & route definitions
│   └── views/             # HTML / PHP template views
│       ├── home.html.php
│       ├── not-found.html.php
│       ├── project.html.php
│       └── projects.html.php
└── src/                   # Application source code
    ├── Routing.php        # Custom regex-based router
    └── controllers/       # Controller classes
        ├── AppController.php
        ├── DefaultController.php
        └── ProjectController.php
```

## Development rules

- Small, logical commits.
- Secrets only in `.env`.

