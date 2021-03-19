<?php

require_once(ROOT.'\config\Db.php');

class BaseController
{
    public $db;

	private $thisObject;

	public function __construct()
	{
		$this->thisObject = $this;
        $this->db = new Db();
	}

	public function get_this_controller_object()
	{
		return $this->thisObject;
	}

	public function getDbClassInstance()
	{
		return $this->db;
	}
}