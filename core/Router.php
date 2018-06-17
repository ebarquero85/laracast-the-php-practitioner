<?php

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){

        $routes = new static;

        require $file;

        return $routes;

    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function get($url, $controller){

        $this->routes['GET'][$url] = $controller;

    }

    public function post($url, $controller){

        $this->routes['POST'][$url] = $controller;

    }

    public function direct($url, $requestType){

        if(array_key_exists($url, $this->routes[$requestType])){
            return $this->routes[$requestType][$url];
        }

        //throw new Exception('Nooooo se encontro la ruta');
        die('Se se encontro la ruta solicitada');

    }

}


