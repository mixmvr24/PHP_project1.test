<?php


namespace App\Core;


class DB
{
    private static $connection = null;

    public static function getConnection()
    {
        if (is_null(self::$connection)) {
            echo "connection";
            self::$connection = new \mysqli('localhost', 'homestead', 'secret', 'tms');

        }
        return self::$connection;
    }
}