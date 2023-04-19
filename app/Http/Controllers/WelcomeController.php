<?php 

namespace App\Http\Controllers;

use App\User;
use App\Support\View;

class WelcomeController {
    // Não é preciso usar ResponseInterface ou ServerRequestInterface pois o slim-bridge vai cuidara do necessário.
    // Outro ponto é que apenas os valores que vamos trabalhar, precisam ser definidos como parâmetros.
    public function index(View $view, User $user) 
    {
        $users = $user->get();
        $name = 'Christiano R Soares';

        return $view('auth.home', compact('name', 'users'));
    }

    public function show(View $view, $name, $id){
        return $view('user.show', compact('name', 'id'));
    }
}