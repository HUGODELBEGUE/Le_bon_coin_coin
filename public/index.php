<?php

include_once "../vendor/autoload.php";

$routes = require_once "../config/routes.php";
$url = filter_input(INPUT_SERVER, "PATH_INFO");

if(null === $url) {
    $url = "/";
}

foreach ($routes as $route => $options) {
    if ($route === $url) {

        $controller = "App\\Controller\\" . $options['controller'];
        $instance = new $controller;

        $method = $options['action'];
        $instance->$method();
    }
}


