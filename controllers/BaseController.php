<?php

include_once ROOT.'\components\Db.php';

class BaseController
{
    public static $db;

	private $thisObject;

	public function __construct()
	{
		self::$thisObject = $this;
        $this::$db = Db::getConnection();
	}

	public static function get_this_controller_object()
	{
		return self::$thisObject;
	}
}