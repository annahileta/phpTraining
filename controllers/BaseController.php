<?php

class BaseController
{
    public $db;

	public function __construct() {
        $this->db = new Db();
	}

	public function getDbClassInstance() {
		return $this->db;
	}
}