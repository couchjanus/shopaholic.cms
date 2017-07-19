<?php
/**
 * Данные для подключения к БД
 */
return [

    'sqlite' => [
        'driver' => 'sqlite',
        'database' => "/databases/database.db",
        'prefix' => '',
    ],

    'mysql' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'shopaholic',
        'username' => 'dev',
        'password' => 'ghbdtn',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => null,
        'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],

    'pgsql' => [
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '5432',
        'database' => 'shopaholic',
        'username' => 'dev',
        'password' => 'ghbdtn',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ],

    'sqlsrv' => [
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '1433',
        'database' => 'shopaholic',
        'username' => 'dev',
        'password' => 'ghbdtn',
        'charset' => 'utf8',
        'prefix' => '',
    ],

];
