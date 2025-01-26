<?php

// core/Router.php
namespace core;

class Router
{
    protected static $routes = [];

    public static function add($uri, $controllerMethod)
    {
        self::$routes[$uri] = $controllerMethod;
    }

    public static function dispatch($uri)
    {
        // Check if the route exists
        if (array_key_exists($uri, self::$routes)) {
            [$controller, $method] = explode('@', self::$routes[$uri]);
            require_once __DIR__ . "/../controllers/{$controller}.php";

            $controllerClass = "\\controllers\\{$controller}";
            if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
                (new $controllerClass)->$method();
                return;
            }
        }

        // If no route matches, show a 404 error page
        self::show404();
    }

    public static function show404()
    {
        http_response_code(404);
        require_once __DIR__ . '/../views/error.php';
    }
}
