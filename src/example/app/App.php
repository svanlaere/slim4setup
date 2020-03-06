<?php

declare(strict_types=1);

namespace Example;

use DI\ContainerBuilder;
use Dotenv\Dotenv;
use Dotenv\Repository\Adapter\EnvConstAdapter;
use Dotenv\Repository\Adapter\ServerConstAdapter;
use Dotenv\Repository\RepositoryBuilder;
use Selective\SameSiteCookie\SameSiteCookieConfiguration;
use Selective\SameSiteCookie\SameSiteCookieMiddleware;
use Selective\SameSiteCookie\SameSiteSessionMiddleware;
use Slim\Csrf\Guard;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Example\Middleware\AccessControlMiddleware;
use Example\Middleware\SecurityHeadersMiddleware;
use Example\Renderer\HtmlErrorRenderer;

class App
{

    public function __construct(bool $run = true)
    {
        // Load the enviroment file
        $adapters = [
            new EnvConstAdapter(),
            new ServerConstAdapter(),
        ];

        $repository = RepositoryBuilder::create()
            ->withReaders($adapters)
            ->withWriters($adapters)
            ->immutable()
            ->make();

        Dotenv::create($repository, CONFIG_PATH, null)->load();

        // Set up Dependency Injection
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions(CONFIG_PATH . DS . 'services.php');
        $containerBuilder->addDefinitions(CONFIG_PATH . DS . 'actions.php');

        $container = $containerBuilder->build();

        AppFactory::setContainer($container);
        $app = AppFactory::create();

        $responseFactory = $app->getResponseFactory();

        // Register Middleware On Container
        $container->set(Guard::class, function () use ($responseFactory) {
            return new Guard($responseFactory);
        });

        $app->addRoutingMiddleware();

        $app->addBodyParsingMiddleware();

        $errorMiddleware = $app->addErrorMiddleware(true, true, true);
        $errorHandler = $errorMiddleware->getDefaultErrorHandler();
        $errorHandler->registerErrorRenderer('text/html', HtmlErrorRenderer::class);

        // Register Twig middleware
        $app->add(TwigMiddleware::createFromContainer($app, Twig::class));

        // Register before middleware for all routes
        $app->add(AccessControlMiddleware::class);
        $app->add(SecurityHeadersMiddleware::class);

        // Enable to register CSRF middleware for all routes
        $app->add(Guard::class);

        // Register the samesite cookie middleware
        $configuration = new SameSiteCookieConfiguration();
        $app->add(new SameSiteCookieMiddleware($configuration));

        // Start the native PHP session handler and fetch the session attributes
        $app->add(new SameSiteSessionMiddleware($configuration));

        // Include routes
        $routes = require CONFIG_PATH . DS . 'routes.php';
        $routes($app);

        // Cache routes
        if (ENABLE_ROUTE_CACHING) {
            $app->getRouteCollector()->setCacheFile(CACHE_PATH . DS . 'routes.cache');
        }

        // Run will be true unless we are doing a unit test
        if ($run) {
            $app->run();
        }
    }
}
