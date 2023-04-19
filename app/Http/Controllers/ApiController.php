<?php 

// Abaixo é o que precisa rodar, acima é o que esta rodando

namespace App\Http\Controllers;

use App\User;

class ApiController
{
    public function index($response, User $user)
    {
        // $user = $user::find(1);
        // $user = Db::table('users')->find(1);
       
        $response->getBody()->write(json_encode($user::get(), JSON_PRETTY_PRINT));

        return $response;
    }
}

// <?php 

// namespace App\Http\Controllers;

// class ApiController
// {
//     public function index($response)
//     {
//         $response->getBody()->write(json_encode([
//             'hello' => 'world'
//         ], JSON_PRETTY_PRINT));

//         return $response;
//     }
// }


