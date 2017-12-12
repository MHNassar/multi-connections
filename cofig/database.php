<?php


/**
 * Set Default Connection
 */

$default = "mysql";

/**
 *  connectors Data  if you want to add other connector
 */

$connectors = [

    'mysql' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'multy',
        'username' => 'root',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]],

    'pgsql' => [
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '5432',
        'database' => 'test',
        'username' => 'postgres',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]],

    'sqlite' => [
        'driver' => 'sqlite',
        'dir' => '/home/nassar/test.db', // path/to/database.db
    ]
];

