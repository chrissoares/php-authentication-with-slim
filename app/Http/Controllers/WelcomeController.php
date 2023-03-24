<?php 

namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController {
    // Não é preciso usar ResponseInterface ou ServerRequestInterface pois o slim-bridge vai cuidara do necessário.
    // Outro ponto é que apenas os valores que vamos trabalhar, precisam ser definidos como parâmetros.
    public function index(View $view) {

        // return $view('auth.home', [
        //     'name' => 'Christiano Ribeiro Soares'
        // ]);
        // Ou faça assim:
        $name = 'Christiano R Soares';
        return $view('auth.home', compact('name'));
    }

    public function show(View $view, $name, $id){
        return $view('user.show', compact('name', 'id'));
    }
}