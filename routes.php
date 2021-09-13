<?php
use \App\Router;
use \App\Controllers\HomeController;
// Router::get('/', function(){
//     echo "home page";
// });
Router::get('/', [HomeController::class, 'index']);
Router::get('/posts', [HomeController::class, 'posts']);