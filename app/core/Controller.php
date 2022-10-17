<?php

namespace app\core;

use Exception;

class Controller
{
    public function execute(string $router)
    {
        if(!str_contains($router, '@')){
            throw new Exception('Error: Route declaration syntax error.');
        }

        list($controller, $method) = explode('@', $router);

        $namespace = "app\controllers\\";
        $controllerNamespace = $namespace.$controller;

        if (!class_exists($controllerNamespace)){
            throw new Exception("Controller {$controller} do not exists.");
        }

        $controller = new $controllerNamespace;

        if (!method_exists($controller, $method)){
            throw new Exception("The method {$method} do not exists in {$controller}");
        }

        $params = new ControllerParams;
        $params = $params->get($router);

        $controller->$method($params);
    }
}