<?php

function view($name, $vars){
    extract($vars);
    require __DIR__ . "/views/$name.php";
}