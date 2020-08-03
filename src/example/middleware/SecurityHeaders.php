<?php

declare(strict_types=1);

namespace Example\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

class SecurityHeadersMiddleware
{
    /**
     * Security Headers middleware invokable class
     *
     * @param  ServerRequest  $request PSR-7 request
     * @param  RequestHandler $handler PSR-15 request handler
     *
     * @return Response
     */
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        // Security headers
        // See https://securityheaders.com for more information
        $response = $handler->handle($request);
        return $response
            ->withoutHeader("Content-Security-Policy")
            ->withoutHeader("X-Content-Security-Policy")
            ->withHeader("Content-Security-Policy", "default-src 'none'; connect-src 'self'; font-src 'self'; frame-src 'self'; img-src 'self'; manifest-src 'self'; media-src 'self'; object-src 'self'; script-src 'self'; style-src 'self'; base-uri 'self'; form-action 'self; frame-ancestors 'self'; upgrade-insecure-requests")
            ->withHeader("X-Content-Security-Policy", "default-src 'none'; connect-src 'self'; font-src 'self'; frame-src 'self'; img-src 'self'; manifest-src 'self'; media-src 'self'; object-src 'self'; script-src 'self'; style-src 'self';  base-uri 'self'; form-action 'self; frame-ancestors 'self'; upgrade-insecure-requests")
            ->withHeader("Feature-Policy", "microphone 'none'; payment 'none'; sync-xhr 'self'")
            ->withHeader("Strict-Transport-Security", "max-age=31536000; includeSubDomains")
            ->withHeader("Referrer-Policy", "same-origin")
            ->withHeader("X-XSS-Protection", "1; mode=block")
            ->withHeader("X-Frame-Options", "sameorigin")
            ->withHeader("X-Content-Type-Options", "nosniff")
            ->withHeader("Expect-CT", "max-age=7776000, enforce")
            ->withHeader("X-UA-Compatible", "IE=edge,chrome=1")
            ->withHeader("X-Robots-Tag", "noindex, nofollow")
            ->withHeader("X-Powered-By", "Slim Framework");
    }
}
