<?php

namespace App\Controllers;
use App\Components\View;

class ErrorController
{ 
    public function action404Error() {
        View::create('error');
    }
}