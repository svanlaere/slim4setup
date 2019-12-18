<?php

declare(strict_types=1);

namespace Example\Renderer;

use Slim\Interfaces\ErrorRendererInterface;
use Slim\Views\Twig;

class HtmlErrorRenderer implements ErrorRendererInterface
{
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke(\Throwable $exception, bool $displayErrorDetails): string
    {
        if ($exception->getCode() == 404) {
            return $this->view->fetch('error/404.twig');
        }

        $title = '500 - ' .  get_class($exception);
        if (is_a($exception, '\Slim\Exception\HttpException')) {
            $title = $exception->getTitle();
        }

        return $this->view->fetch('error/default.twig', [
            'title' => $title,
            'debug' => $displayErrorDetails,
            'type' => get_class($exception),
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' =>  $exception->getLine(),
            'trace' => $exception->getTraceAsString()
        ]);
    }
}
