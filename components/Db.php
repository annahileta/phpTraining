<?php

use DevCoder\EnvParser;

class Db
{
    private $db;
    private $host, $user, $pass, $db_name;

    public function __construct() {
        (new EnvParser(__DIR__ . '/config/.env'))->load();

        $this->host = getenv('HOST_NAME');
        $this->user = getenv('USER_NAME');
        $this->pass = getenv('PASSWORD');
        $this->db_name = getenv('DB_NAME');
    }
    
    public function getConnection() {
        if (isset($this->db) === false) { 
            $this->db = new PDO('mysql:host='.  $this->host .
            ';dbname=' .  $this->db_name, 
            $this->user, 
            $this->pass);
        }

        return $this->db;
    }
}