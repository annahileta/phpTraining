<?php

  use MVCFramework\Router;

  // FRONT CONTROLLER
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   define('ROOT', dirname(__FILE__));

   $router = new Router();
   $router->run();


