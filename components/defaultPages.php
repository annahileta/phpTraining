<?php

require_once ROOT.'/controllers/ErrorController.php';

class DefaultPages
{
    public function getErrorPage() {
        $controller = new ErrorController();
        $controller->action404Error();
    }

    public function getLogination() {
        $controller = new AuthorizationController();
        $controller->actionLogin();
    }
}