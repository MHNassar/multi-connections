<?php
/**
 * Created by PhpStorm.
 * User: nassar
 * Date: 12/12/17
 * Time: 03:35 ص
 */

class SqliteConnectionClass implements ConnectionInterface
{
    function connect($connection)
    {
        echo "Sqlite Connect  >>  Connection Status ====> ";

        try {
            new PDO("sqlite:" . $connection['dir']);

            echo " successfully";


        } catch (PDOException $e) {
            echo "Failed";

        }

    }

}