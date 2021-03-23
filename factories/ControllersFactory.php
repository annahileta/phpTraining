<?php

class ControllersFactory
{
    private $allControllers = array();
    private $news;
    private $authorization;
    
    public function __construct()
    {
        $possibleControllersFile = ROOT.'/factories/PossibleControllers.php';
        $this->allControllers = require_once($possibleControllersFile);
    }

    public static function getController($controllerName) {
        if (in_array($controllerName, self::$allControllers)) {
            $getController = 'get'. $controllerName;
            return self::$getController();
        } else {
            return new Error("The controller is not registered in possible controllers.");
        }
    }

    private static function getNewsController() {
        if (isset(self::$news) === false) { 
            self::$news = new NewsController();
        }

        return self::$news;
    }

    private static function getAuthorizationController() {
        if (isset(self::$authorization) === false) { 
            self::$authorization = new AuthorizationController();
        }

        return self::$authorization;
    }
}