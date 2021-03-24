<?php

use App\Components\Router;

class MVCFramework 
{
    public function start() {
        $router = new Router();
        $router->run();
    }
}
   