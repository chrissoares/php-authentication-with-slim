<?php 

namespace App\Support;

use Slim\App;
use Illuminate\Support\Str;

class Route{
    protected static App $app;

    public static function setup(App &$app){
        self::$app = $app;

        return $app;
    }

    public static function __callStatic($verb, $parameters){
        $app = self::$app;
        // $app->get('/route', 'WelcomeController@index');
        
        [$route, $action] = $parameters;

        // $app->$verb($route, $action);
        self::validation($route, $verb, $action);

        return is_callable($action)
            ? $app->$verb($route, $action)
            : $app->$verb($route, self::resolveViaController($action));
    }

    public static function resolveViaController($action){
        
        $class = Str::before($action, '@');
        $method = Str::after($action, '@');

        //  Ex.: \App\Http\Controllers\HomeController
        $controller = config('routing.controllers.namespace') . $class;

        //  Ex.: [\App\Http\Controllers\HomeController::class, 'index']
        return [$controller, $method];
    }

    protected static function validation($route, $verb, $action){
        $exception = "Unresolvable Route Callback/Controller action";
        $context = json_encode(compact('route', 'action', 'verb'));
        $fails = !((is_callable($action)) or (is_string($action) and Str::is("*@*", $action)));

        throw_when($fails, $exception . $context);

    }
}