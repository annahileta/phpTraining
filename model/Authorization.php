<?php

namespace App\Models;
require_once ROOT.'/model/BaseModel.php';

class Authorization extends BaseModel
{
    public function getAuthorizedUser($username) {
        $db = $this->getDbClassInstance()->getConnection();

        $sql = sprintf("SELECT * FROM users WHERE name = '%s'", $username);
        $result = $db->query($sql);
        
        return $result;
    }
}