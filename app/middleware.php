<?php

declare(strict_types=1);

use App\Application\Middleware\SessionMiddleware;
use Slim\App;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $app->add(SessionMiddleware::class);
    // Add Twig-View Middleware
    $app->add(TwigMiddleware::createFromContainer($app));
};
