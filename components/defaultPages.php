<?php

class DefaultPages
{
    public function getHomePage($controllerAndMethod) {
        $segments = explode('/', $controllerAndMethod);

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);
        $actionName = 'action'.ucfirst(array_shift($segments));
        $controllerFile = ROOT . '/controllers/' .
        $controllerName . '.php';

        if (file_exists($controllerFile)) {
            include_once($controllerFile);
        }

        $controllerObject = new $controllerName();

        $controllerObject->$actionName();
    }

    public function getLogination() {
        $controller = AuthorizationController::GetInstance();
        $controller->actionLogin();
    }
}