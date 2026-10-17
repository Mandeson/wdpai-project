<?php

declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ProjectController;
use App\Controller\StaticController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';

if (str_starts_with($path, '/static/')) {
    (new StaticController())->serve($path);
    return;
}

$routing = new Routing();

$routing->get('/projects', ProjectController::class, 'index');
$routing->get('/projects/{id}', ProjectController::class, 'show');
$routing->get('/', DefaultController::class, 'index');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}
