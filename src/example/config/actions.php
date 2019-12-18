<?php

declare(strict_types=1);

use Example\Controllers\HelloController;
use Example\Controllers\HomeController;
use Example\Controllers\DemoController;
use Example\Models\Product;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

return [
    HelloController::class => function (ContainerInterface $container) {
        return new HelloController(
            $container->get(Twig::class),
        );
    },
    HomeController::class => function (ContainerInterface $container) {
        return new HomeController(
            $container->get(Twig::class),
        );
    },
    DemoController::class => function (ContainerInterface $container) {
        return new DemoController(
            $container->get(Twig::class),
            $container->get(Product::class),
        );
    }
];
