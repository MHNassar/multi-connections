<?php
/**
 * Created by PhpStorm.
 * User: nassar
 * Date: 12/12/17
 * Time: 01:55 ص
 */

class MySqlConnectionClass implements ConnectionInterface
{
    function connect($connection)
    {
        echo "MySql Connect  >>  Connection Status ====> ";
        try {
            new PDO(
                $connection['driver'] . ':host=' . $connection['host'] . ';dbname=' . $connection['database'],
                $connection['username'],
                $connection['password'],
                $connection['options']
            );

            echo " successfully";


        } catch (PDOException $e) {
            echo " Failed";

        }

    }
}