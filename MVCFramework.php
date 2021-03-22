<?php

class MVCFramework 
{
    public function setPage($key, $controllerAndMethods) {
        $routes = new Routes();
        $routes->SetRoute($key, $controllerAndMethods);
    }

    public function setDefaultPage($controllerAndMethods) {
        $routes = new Routes();
        $routes->SetDefaultRoute($controllerAndMethods);
    }

    public function start() {
        $router = new Router();
        $router->run();
    }
}
   