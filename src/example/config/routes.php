<?php

declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', Example\Controllers\HomeController::class)->setName('home');
    $app->get('/demo', Example\Controllers\DemoController::class)->setName('demo');
    $app->get('/hello[/{name}]', Example\Controllers\HelloController::class)->setName('hello');

    // Example of how to use a route group 
    $app->group('/member', function (Group $group) {
        $group->map(['GET', 'POST'], '/login', 'App\Controller\AuthController:login')->setName('login');
        $group->get('/logout', 'App\Controller\AuthController:logout')->setName('logout');
    });
};
