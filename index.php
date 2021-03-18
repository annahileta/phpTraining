<?php
 // FRONT CONTROLLER
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

   define('ROOT', dirname(__FILE__));
   require_once(ROOT.'\components\router.php');
   require_once(ROOT.'\config\autoloading.php');

   $router = new Router();
   $router->run();

   $loader = new Autoloader();
   $loader::register(ROOT.'\components\Db.php');



