<?php

class Db
{
    public static function getConnection()
    {
        $db = mysqli_connect('localhost', 'root', '', 'php_base');

        return $db;
    }

    public static function closeConnection($db)
    {
        mysqli_close($db);
    }
}