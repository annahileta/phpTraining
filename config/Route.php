<?php

namespace App\Config;

class Route 
{
    public $route;

    public $controllerAndMethod;

    public $isGet = false;

    public $isPost = false;
    
    public function get($key, $value) {
        $this->route = $key;
        $this->controllerAndMethod = $value;
        $this->isGet = true;
    }

    public function post($key, $value) {
        $this->route = $key;
        $this->controllerAndMethod = $value;
        $this->isPost = true;
    }

    public function GetControllerAndMethod($route) {
        return $this->controllerAndMethod;
    }

    public function ChangeControllerMethod($controllerAndMethod) {
        $this->controllerAndMethod = $controllerAndMethod;
    }
}
 