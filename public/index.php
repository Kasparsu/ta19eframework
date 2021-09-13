<?php

spl_autoload_register(function($class){
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__ . "\\..\\src\\" . implode('\\', $parts) . ".php";
    require_once $path;
});

require __DIR__ . '\\..\routes.php';

$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if(isset($match['action']) && is_callable($match['action'])){
    call_user_func($match['action']);
} elseif(isset($match['action']) && is_array($match['action'])) {
    $class = $match['action'][0];
    $method = $match['action'][1];
    $obj = new $class();
    $obj->$method();
} else {
    echo "404";
}