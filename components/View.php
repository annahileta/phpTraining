<?php

namespace App\Components;

class View 
{
    public static function create(string $template, array $parameters) {
        foreach ($parameters as $key => $value) {
            $$key = $value;
        }
        
        ob_start();
        include_once ROOT."/views/$template.php";
        ob_get_clean();
    }
}