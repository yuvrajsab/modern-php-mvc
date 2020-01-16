<?php

return [
    'database' => [
        'name' => 'your_database_name',
        'username' => 'your_database_username',
        'password' => 'your_database_password',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
