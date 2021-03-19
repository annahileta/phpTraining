<?php
require_once(ROOT.'\controllers\NewsController.php');
require_once(ROOT.'\controllers\AuthorizationController.php');

class DefaultPages
{
    public function getHomePage(){
        $controller = new NewsController();
        return $controller->actionIndex();
    }

    public function getLogination(){
        $controller = new AuthorizationController();
        return $controller->actionLogin();
    }
}