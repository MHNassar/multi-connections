<?php
/**
 * Created by PhpStorm.
 * User: nassar
 * Date: 12/12/17
 * Time: 02:09 ص
 */

require __DIR__ . "/connectors/ConnectionInterface.php";
require __DIR__ . "/connectors/MySqlConnectionClass.php";
require __DIR__ . "/connectors/PgSqlConnectionClass.php";
require __DIR__ . "/connectors/SqliteConnectionClass.php";
require __DIR__ . "/ConnectionContext.php";
require __DIR__ . "/cofig/database.php";

/**
 *  Test Connection
 */

$connction = $connectors[$default];

$connector = new ConnectionContext($connction['driver']);

echo $connector->connect($connction);



