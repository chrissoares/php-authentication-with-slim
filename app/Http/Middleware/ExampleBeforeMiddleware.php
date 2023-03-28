<?php

namespace App\Http\Middleware;

use Slim\Psr7\REsponse;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handle;

class ExampleBeforeMiddleware{
    public function __invoke(Request $request, Handle $handle): Response{
        $response = $handle->handle($request);
        $existing_body = (string) $response->getBody();

        $response = new Response;
        $response->getBody()->write("Before: {$existing_body}");

        return $response;
    }
}