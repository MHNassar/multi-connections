<?php
/**
 * Created by PhpStorm.
 * User: nassar
 * Date: 12/12/17
 * Time: 02:05 ص
 */

class ConnectionContext
{

    private $connection = NULL;

    public function __construct($driver)
    {

        switch ($driver) {
            case "mysql":
                $this->connection = new MySqlConnectionClass();
                break;
            case "pgsql":
                $this->connection = new PgSqlConnectionClass();
                break;
            case "sqlite":
                $this->connection = new SqliteConnectionClass();
                break;
        }
    }

    public function connect($connectionData)
    {
        return $this->connection->connect($connectionData);
    }
}