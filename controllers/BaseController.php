<?php

namespace MVCFramework;

use Db;

class BaseController
{
    public static $db;

	private $thisObject;

	public function __construct()
	{
		self::$thisObject = $this;
		$db = new Db();
        $this::$db = $db->getConnection();
	}

	public static function get_this_controller_object()
	{
		return self::$thisObject;
	}
}