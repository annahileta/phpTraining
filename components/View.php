<?php

namespace App\Components;

class View 
{
    public static function create(string $template, array $parameters) {
        include_once ROOT."/views/$template.php";
    }
}