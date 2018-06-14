<?php

class Router
{

    protected $routes = [];

    public static function load($file){

        $routes = new static;

        require $file;

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

        throw new Exception('No routes define for this URL');

    }

}


