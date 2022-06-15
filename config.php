<?php

return [
    'database' => [
        'name' => 'quest',
        'username' => 'root',
        'password' => 'feysa123',
        'connection' => 'mysql:host=localhost',
        'options'=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];