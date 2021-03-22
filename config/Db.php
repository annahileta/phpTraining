<?php

class Db
{
    private $db;
    private $host, $user, $pass, $db_name;

    public function __construct() {
        $configClass = new DbConfig();
        $config = $configClass->GetConfiguration();

        if (is_array($config) || is_object($config)) {
            $this->host = $config['host'];
            $this->user = $config['user'];
            $this->pass = $config['pass'];
            $this->db_name = $config['dbname'];
        }
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