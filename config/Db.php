<?php

class Db
{
    private PDO $db;
    private $host, $user, $pass, $db_name;

    public function __construct()
    {
        $configFile = ROOT.'/config/DbConfig.php';
        $config = require_once($configFile);
        $this->host = $config['host'];
        $this->user = $config['user'];
        $this->pass = $config['pass'];
        $this->db_name = $config['dbname'];
    }
    
    public function getConnection()
    {
        if (isset($this->db) === false) { 

            $temp = new PDO('mysql:host='.  $this->host .
            ';dbname=' .  $this->db_name, 
            $this->user, 
            $this->pass);
            
            $this->db = $temp;
        }

        return $temp;
    }
}