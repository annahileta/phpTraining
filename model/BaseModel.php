<?php

include_once ROOT.'\config\Db.php';

class BaseModel {
	private static BaseModel $thisObject;

	private Db $dbClassInstance;

    public function __construct()
    {
        $this->dbClassInstance = new Db();
    }

	public static function getThisObject()
	{
		return self::$thisObject;
	}

	public function getDbClassInstance()
	{
		return $this->dbClassInstance;
	}
}