<?php
namespace App;

class Router {
    private $routes = [];

    public function addRoute($route, $controller) {
        $this->routes[$route] = $controller;
    }

    public function addRoutes($routes) {
        $this->routes = array_merge($this->routes, $routes);
    }

    public function dispatch($route) {
        if(!$route == '/login'){
            session_start();
        }
        if (array_key_exists($route, $this->routes)) {
            $controller = $this->routes[$route];
            $controller();
        } else {
            $title = '404: File Not Found';
            include_once TEMPLATE_DIR.'header.php';
            include_once VIEW_DIR.'404.php';
            include_once TEMPLATE_DIR.'footer.php';
        }
    }
}
