<?php

namespace App\Config;

class Routes 
{
    private $routes = array(
        (new Route())->get('news/([a-z]+)/([0-9]+)', 'news/view/$1/$2'),
        (new Route())->get('news/addNewArticle', 'news/addNewArticle'),
        (new Route())->get('news', 'news/index'),
        (new Route())->get('authorization', 'authorization/login')
    );

    public function GetRoutes() {
        return $this->routes;
    }

    public function SetRoute($key, $value, $getOrPost) {
        array_push((new Route())->$getOrPost($this->routes, $key, $value));
    }
}
 