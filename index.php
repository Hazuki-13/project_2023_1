<?php

date_default_timezone_set('Europe/Paris');

spl_autoload_register(function ($className) {
    require str_replace('\\', '/', $className) . '.php';
});

 // Récupération de toutes les routes admin
 $routes = require 'routes.php';
    
 // Récupération de la route sur laquelle on se trouve
 $route = $_SERVER['PATH_INFO'] ?? '/home';

 if (!isset($routes[$route]))
 {
     header ("location: home");
 };
 
 //récupération du controlleur et de sa méthode
 list($controllerName, $method) = $routes[$route];

 //instanciation du controller
 $controller = new $controllerName();
 $controller->$method();