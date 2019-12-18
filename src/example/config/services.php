<?php

declare(strict_types=1);

use Example\TwigExtension\CsrfExtension;
use Psr\Container\ContainerInterface;
use Slim\Csrf\Guard;
use Slim\Views\PhpRenderer;
use Slim\Views\Twig;
use Twig\Extension\DebugExtension;

return [
    Twig::class => function (ContainerInterface $container) {
        // Updated to use twig-view v3.0.0
        $twig = Twig::create(APP_PATH . DS . 'views', [
            'cache' => CACHE_PATH,
            'debug' => true,
            'auto_reload' => true,
        ]);

        $twig->addExtension(new DebugExtension());
        $twig->addExtension(new CsrfExtension($container->get(Guard::class)));

        return $twig;
    },
    PhpRenderer::class => function (ContainerInterface $container) {
        return new PhpRenderer(APP_PATH . DS . 'views');
    },
    PDO::class => function (ContainerInterface $container) {
        $driver = $_ENV["DB_DRIVER"];
        $host = $_ENV["DB_HOST"];
        $dbname = $_ENV["DB_NAME"];
        $charset = $_ENV["DB_CHARSET"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        $dsn = "$driver:host=$host;dbname=$dbname;charset=$charset";

        $options = [
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset",
            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            \PDO::ATTR_EMULATE_PREPARES => true,
        ];

        try {
            return new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    },

];
