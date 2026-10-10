# Project template

A simple PHP project with Docker and Nginx.

## Functions

| Area | What it does |
|---|---|
| Home page | Shows a simple message and that the app is working properly |

## Tech stack

| Layer | Technologies |
|---|---|
| Backend | PHP 8.3 |
| HTTP server | Nginx |
| Containerization | Docker Compose |

## Quick start

```bash
git clone https://github.com/Mandeson/wdpai-project.git
cd REPOZYTORIUM
docker compose up --build -d
```

Application: http://localhost:8080

## Project structure

```
my-app/
├── docker-compose.yaml
├── docker/ # docker config
│   ├── nginx/
│   │   ├── Dockerfile
│   │   └── nginx.conf
│   └── php/
│       └── Dockerfile
└── public/  # where my app files are
    └── index.php
```

## Development rules

- Small, logical commits.
- Secrets only in .env.
