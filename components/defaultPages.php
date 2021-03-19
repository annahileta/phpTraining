<?php
require_once(ROOT.'\controllers\NewsController.php');
require_once(ROOT.'\controllers\AuthorizationController.php');

class DefaultPages
{
    public function getHomePage() 
    {
        $controller = new NewsController();
        $controller->actionIndex();
    }

    public function getLogination() 
    {
        $controller = new AuthorizationController();
        $controller->actionLogin();
    }
}