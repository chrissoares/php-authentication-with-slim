<?php 

use App\Support\Route;

Route::get('/', 'WelcomeController@index');
Route::get('/welcome', 'WelcomeController@index');
Route::get('/welcome/{name}', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');
