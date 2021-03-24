<?php

namespace App\Models;
use App\Components\Db;

class BaseModel {
    public function __construct() {
        $this->dbClassInstance = new Db();
    }

	public function getDbClassInstance() {
		return $this->dbClassInstance;
	}
}