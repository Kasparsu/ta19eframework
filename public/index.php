<?php

spl_autoload_register(function($class){
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . "\\..\\src\\" . implode('\\', $parts) . ".php";
    require_once $path;
});

switch($_SERVER['REQUEST_URI']){
    case '/':
        echo "home page";
        break;
    case '/posts': 
        echo "some posts";
        break;
    default: 
        echo "404 page not found";
        break;
}