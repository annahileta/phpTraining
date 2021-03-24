<?php

namespace App\Controllers;
use App\Components\View;

class ErrorController extends BaseController
{ 
    public function action404Error() {
        View::create('error', []);
    }
}