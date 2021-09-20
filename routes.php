<?php
use \App\Router;
use \App\Controllers\HomeController;
// Router::get('/', function(){
//     echo "home page";
// });
Router::get('/', [HomeController::class, 'index']);
Router::post('/upload', [HomeController::class, 'upload']);
Router::post('/login', [HomeController::class, 'login']);
Router::get('/logout', [HomeController::class, 'logout']);