<?php

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {

        $routes = new static;

        require $file;

        return $routes;

    }

    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }

    public function direct($url, $requestType)
    {

        if (array_key_exists($url, $this->routes[$requestType])) {

            $this->callAction(
                ...explode('@', $this->routes[$requestType][$url])
            );

            return $this->routes[$requestType][$url];

        }

        die('Se se encontro la ruta solicitada');

    }

    public function callAction($controller, $action)
    {

        if (!method_exists($controller, $action)) {
            die("El {$controller} no contiene el método {$action}");
        }

        return (new $controller)->$action();

    }

}


