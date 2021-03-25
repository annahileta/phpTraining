<?php

namespace App\Components;
use App\Config\Routes;
use App\Components\DefaultPages;

require_once ROOT.'\controllers\NewsController.php';

class Router 
{
    private $routes;
    private $requestHandlers = array();
    private $defaultPagesClass;

    public function __construct() {
        $routesClass = new Routes();
        $this->routes = $routesClass->GetRoutes();

        ob_start();
        $handlersPath = ROOT.'\components\requestHandlers.php';
        ob_get_clean();
        
        $this->requestHandlers = include_once($handlersPath);

        $this->defaultPagesClass = new DefaultPages();
    }

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isGet()
    {
        return $this->getMethod() === 'GET';
    }

    public function isPost()
    {
        return $this->getMethod() === 'POST';
    }

    public function run() {
        $uri = $this->getURI();

        foreach ($this->routes as $route) {
            if (preg_match("~$route->route~", $uri) 
                && $route->isGet === $this->isGet() 
                && $route->isPost === $this->isPost()) {
                $internalRoute = preg_replace("~$route->route~", $route->controllerAndMethod, $uri);

                $segments = explode('/', $internalRoute);
                array_shift($segments);
                array_shift($segments);
                array_shift($segments);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                $parametrs = $segments;

                $controllerFile = ROOT . '/controllers/' .
                $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                foreach ($this->requestHandlers as $handler) {
                    if($handler->handle() === false) {
                        $this->defaultPagesClass->getLogination();
                    }
                }

                $controllerObject = new $controllerName();

                call_user_func_array(array($controllerObject, $actionName), $parametrs);
            }
        }

        $this->defaultPagesClass->getErrorPage();
    }
}