<?php

spl_autoload_register(function($class){
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . "\\..\\src\\" . implode('\\', $parts) . ".php";
    require_once $path;
});

use \App\Controllers\HomeController as Home;

$car = new \App\Car();
var_dump($car);
$plane = new \App\Plane();
var_dump($plane);
$homeController = new Home();
var_dump($homeController);