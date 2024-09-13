<?php
$globalConfigs = [
    'database' => [
        'user' => 'jin',
        "password" => 'motherload',
        'host' => 'localhost',
        'port' => '3306',
        'db_name' => 'cours2'
    ]
];

$dsn = 'mysql:host=' . $globalConfigs["database"]['host'] . ';port=' . $globalConfigs['database']["port"] . ';dbname=' . $globalConfigs['database']["db_name"] . '';

$connection = new PDO($dsn, $globalConfigs['database']['user'], $globalConfigs['database']['password']);