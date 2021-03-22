<?php

class Authorization extends BaseModel
{
    public static function getThisObject() {
		return new self();
	}

    public function getAuthorizedUser($username) {
        $db = $this->getDbClassInstance()->getConnection();

        $sql = sprintf("SELECT * FROM users WHERE name = '%s'", $username);
        $result = $db->query($sql);
        
        return $result;
    }
}