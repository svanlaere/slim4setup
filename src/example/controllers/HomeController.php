<?php

declare(strict_types=1);

namespace Example\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\Twig;

class HomeController
{
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        return $this->view->render($response, 'home.twig');
    }
}
