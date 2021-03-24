<?php

 ini_set('display_errors', 1);
  error_reporting(E_ALL);

  define('ROOT', dirname(__FILE__));
  require ROOT.'/vendor/autoload.php';  
  require_once ROOT.'/MVCFramework.php';  

  $mvcFramework = new MVCFramework();
  $mvcFramework->start();
   


