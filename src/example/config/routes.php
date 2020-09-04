<?php

declare(strict_types=1);

use Example\Controllers\DemoController;
use Example\Controllers\HelloController;
use Example\Controllers\HomeController;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

    $app->get('/', HomeController::class)->setName('home');
    $app->get('/demo', DemoController::class)->setName('demo');
    $app->get('/hello[/{name:[a-z0-9]}]', HelloController::class)->setName('hello');

    // Example of how to use a route group 
    $app->group('/member', function (Group $group) {
        $group->map(['GET', 'POST'], '/login', 'App\Controller\AuthController:login')->setName('login');
        $group->get('/logout', 'App\Controller\AuthController:logout')->setName('logout');
    });
};
