<?php 


namespace App\Providers;

use Slim\App;

abstract class ServiceProvider{

    public App $app;
    
    final public function __construct(App &$app){
        $this->app = $app;
    }

    abstract public function register();
    abstract public function boot();

    final public static function setup(App &$app, array $providers){
        // Exemplo:
        // $providers = [
        //     \App\Providers\ViewServiceProvider::class,
        //     \App\Providers\RouteServiceProvider::class,
        //     \App\Providers\ErrorMiddlewareServiceProvider::class,
        // ];
        $providers = array_map(fn($provider) => new $provider($app), $providers);

        array_walk($providers, fn(ServiceProvider $provider) => $provider->register());
        array_walk($providers, fn(ServiceProvider $provider) => $provider->boot());
    }

}