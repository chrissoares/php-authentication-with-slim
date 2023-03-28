<?php

namespace App\Http\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handle;

class ExampleAfterMiddleware{
    public function __invoke(Request $request, Handle $handle){
        $response = $handle->handle($request);

        $response->getBody()->write("\n After Middleware");

        return $response;
    }
}