<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new App\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "TodoController@index");
$router->get('/login/', "UserController@showLogin");
$router->get('/register/', "UserController@showRegister");
$router->get('/logout/', "UserController@logout");

$router->post('/login/', "UserController@login");
$router->post('/register/', "UserController@register");

$router->run();
