<?php

class Router
{

    protected $routes = [];

    public static function load($file){

        $routes = new static;

        $arreglo = require $file;

        $routes->register($arreglo);

        return $routes;

    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($url){

        if(array_key_exists($url, $this->routes)){
            return $this->routes[$url];
        }

        throw new Exception('No se encontro la ruta');

    }

}


