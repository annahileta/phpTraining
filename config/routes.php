<?php
class Routes 
{
    private $routes = array(
        'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
        'news/addNewArticle' => 'news/addNewArticle',
        'news' => 'news/index',
        'authorization' => 'authorization/login',
    );

    public function GetRoutes() {
        return $this->routes;
    }

    public function SetRoute($key, $value) {
        array_push($this->routes, $key, $value);
    }

    public function SetDefaultRoute($value) {
        $route = array('default' => $value);
        $this->routes = array_replace($this->routes, $route);
    }
}
 