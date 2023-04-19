<?php 

Factory::define(App\User::class, fn($fake) => [
    'first_name' => $fake->firstName,
    'last_name' => $fake->lastName,
    'email' => $fake->unique()->email,
    'password' => sha1('secret'),
    'created_at' => date('Y-m-d h:i:s'),
    'updated_at' => date('Y-m-d h:i:s'),
    
]);