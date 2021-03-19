<?php

require_once(ROOT.'\components\defaultPages.php');

class Router 
{
    private $routes;
    private $requestHandlers = array();
    private $defaultPagesClass;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include_once($routesPath);

        $handlersPath = ROOT.'\components\requestHandlers.php';
        $this->requestHandlers = include_once($handlersPath);

        $this->defaultPagesClass = new DefaultPages();
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path)
        {
            if (preg_match("~$uriPattern~", $uri))
            {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

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

                if (file_exists($controllerFile))
                {
                    include_once($controllerFile);
                }

                foreach ($this->requestHandlers as $handler) 
                {
                    if($handler->handle() === false)
                    {
                        $this->defaultPagesClass->getLogination();
                    }
                }

                $controllerObject = new $controllerName();

                call_user_func_array(array($controllerObject, $actionName), $parametrs);
            }
        }

        $this->defaultPagesClass->getHomePage();
    }
}