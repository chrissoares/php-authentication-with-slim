<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Http\Controllers\WelcomeController;

return function (App $app){

    $app->get('/home', function(Request $request, Response $response, $parameters){
        $name = 'Chris Soares Teste';
        return view($response, 'auth.home', compact('name'));
    });

    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}/{id}', [WelcomeController::class, 'show']);
};