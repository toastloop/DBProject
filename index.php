<?php

namespace App;

require_once 'src/autoload.php';
require_once 'src/constants.php';
require_once 'src/router.php';
require_once 'src/session.php';

use App\Controller\HomeController;
use App\Router;

$router = new Router();

$routes = [
    '/' => '\App\Controller\Home::render',
    'login' => '\App\Controller\Session::login',
    'logout' => '\App\Controller\Session::logout'
];

$route = filter_var($_GET['route'] ?? '/', FILTER_SANITIZE_URL);

$router->addRoutes($routes);
$router->dispatch($route);
