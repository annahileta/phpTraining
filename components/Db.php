<?php

class Db
{
    public static function getConnection()
    {
        $db = mysqli_connect('localhost', 'root', '', 'php_base');

        return $db;
    }
}