<?php

class BaseModel {
	private $thisObject;

	public static function getThisObject()
	{
		return self::$thisObject;
	}
}