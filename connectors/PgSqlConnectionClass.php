<?php
/**
 * Created by PhpStorm.
 * User: nassar
 * Date: 12/12/17
 * Time: 03:09 ص
 */

class PgSqlConnectionClass implements ConnectionInterface
{
    public function connect($connection)
    {
        echo "pgSql Connect  >>  Connection Status ====> ";
        try {
            new PDO(
                $connection['driver'] . ':host=' . $connection['host'] . ';port=' . $connection['port'] . ';dbname=' . $connection['database'],
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