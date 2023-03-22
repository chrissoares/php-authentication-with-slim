<?php 

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class WelcomeController {
    // Não é preciso usar ResponseInterface ou ServerRequestInterface pois o slim-bridge vai cuidara do necessário.
    // Outro ponto é que apenas os valores que vamos trabalhar, precisam ser definidos como parâmetros.
    public function index($response) {
        $response->getBody()->write('Welcome Controller');
        
        return $response;
    }

    public function show(Response $response, $name, $id){
        $response->getBody()->write("Welcome {$name} you id is {$id}");

        return $response;
    }
}