<?php

namespace App\Controllers;

class ErrorController extends BaseController
{ 
    public function action404Error() {
        require_once(ROOT . '\views\error.php');
    }
}