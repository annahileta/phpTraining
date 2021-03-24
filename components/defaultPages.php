<?php

namespace App\Components;
use App\Controllers;
require_once ROOT.'/controllers/ErrorController.php';

class DefaultPages
{
    public function getErrorPage() {
        $controller = new Controllers\ErrorController();
        $controller->action404Error();
    }

    public function getLogination() {
        $controller = new Controllers\AuthorizationController();
        $controller->actionLogin();
    }
}