<?php

class DbConfig 
{
    private $config = array(
        'host' => "localhost",
        'dbname' => "php_base",
        'user' => "root",
        'pass' => "",
    );

    public function GetConfiguration() {
        return $this->config;
    }

    public function SetHost($value) {
        $newHost = array('host' => $value);
        $this->config = array_replace($this->config, $newHost);
    }

    public function SetDbName($value) {
        $dbName = array('dbname' => $value);
        $this->config = array_replace($this->config, $dbName);
    }

    public function SetUser($value) {
        $user = array('user' => $value);
        $this->config = array_replace($this->config, $user);
    }

    public function SetPassword($value) {
        $password = array('pass' => $value);
        $this->config = array_replace($this->config, $password);
    }
}