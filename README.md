# Project template

A PHP web application with Docker, Nginx, PostgreSQL, pgAdmin, and Mailpit.

## Functions

| Area | What it does |
|---|---|
| Home page | Shows a simple message and that the app is working properly |
| Database | PostgreSQL 16 server for data storage |
| Database Management | pgAdmin 4 web UI for database administration |
| Mail Testing | Mailpit for capturing and viewing sent emails |

## Tech stack

| Layer | Technologies |
|---|---|
| Backend | PHP 8.3 (FPM) with extensions & Composer 2 |
| HTTP server | Nginx |
| Database | PostgreSQL 16 |
| Database Admin | pgAdmin 4 |
| Mail Testing | Mailpit |
| Containerization | Docker Compose |

### PHP Environment & Extensions

- **Composer**: 2.x
- **Extensions**: `pdo_pgsql`, `pgsql`, `gd` (with JPEG support), `zip`, `opcache`, `bcmath`
- **Configuration Defaults**:
  - `memory_limit = -1`
  - `upload_max_filesize = 512M`
  - `post_max_size = 512M`
  - `max_file_uploads = 20`

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
├── docker-compose.yaml
├── docker/                # Docker configuration files
│   ├── db/
│   │   └── Dockerfile
│   ├── nginx/
│   │   ├── Dockerfile
│   │   └── nginx.conf
│   └── php/
│       └── Dockerfile
└── public/                # Publicly accessible application root
    └── index.php
```

## Development rules

- Small, logical commits.
- Secrets only in `.env`.

