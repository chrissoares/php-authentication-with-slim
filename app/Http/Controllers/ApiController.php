<?php 

// Abaixo é o que precisa rodar, acima é o que esta rodando

namespace App\Http\Controllers;

use DB;

class ApiController
{
    public function index($response, DB $db)
    {
        echo "usuario";
        // $user = Db::table('users')->find(1);
        $user = $db->table('users')->find(1);
        dd($user);
        
        $response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

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


