<?php

use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use App\Providers\ServiceProvider;


// Removidos - Mantido para saber como usar
// $container = new Container;
// $settings = require __DIR__ . '/../app/settings.php';
// $settings($container);

$app = SlimAppFactory::create(new Container);

// Passa $app como referência ao service provider
ServiceProvider::setup($app, config('app.providers'));

return $app;
//$app->run();