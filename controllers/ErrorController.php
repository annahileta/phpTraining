<?php

require_once ROOT.'/controllers/BaseController.php';

class NewsController extends BaseController
{ 
    public function action404Error() {
        require_once(ROOT . '\views\error.php');
    }
}