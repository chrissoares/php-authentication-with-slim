<?php

require_once __DIR__ . '/../vendor/autoload.php';
$app = require_once base_path('bootstrap/app.php');

return [
    'paths' => [
        'migrations' => database_path('migrations'),
        'seeds' => database_path('seeders'),
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'slim',
        'slim' => [
            'adapter' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'name' => env('DB_DATABASE', 'homestead'),
            'user' => env('DB_USERNAME', 'homestead'),
            'pass' => env('DB_PASSWORD', 'secret'),
            'port' => env('DB_PORT', '3306'),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
        ]
    ]
];