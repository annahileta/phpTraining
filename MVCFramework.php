<?php

use App\Components\Router;
require_once ROOT.'\compontents\router.php'; 

class MVCFramework 
{
    public function start() {
        $router = new Router();
        $router->run();
    }
}
   