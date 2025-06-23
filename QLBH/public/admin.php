<?php

$controllerName = $_GET['controller'] ?? 'admin';
$action = $_GET['action'] ?? 'index';

if ($controllerName == 'product') {
    $controllerclass = 'ProductController';
} else {
    $controllerclass = ucfirst($controllerName) . 'Controller';
}

require_once "./../controllers/{$controllerclass}.php";
$controller = new $controllerclass();
$controller->$action();
