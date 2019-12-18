<?php

declare(strict_types=1);

namespace Example\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\Twig;
use App\Models\Product;

class DemoController
{
    protected $view;
    protected $product;

    public function __construct(Twig $view, Product $product)
    {
        $this->view = $view;
        $this->product = $product;
    }

    public function __invoke(Response $response, array $args)
    {
        $args = [
            'product' => $this->product->getAll(),
        ];
        return $this->view->render($response, 'demo.twig', $args);
    }
}
