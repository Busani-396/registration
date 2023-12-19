<?php

// Include the necessary files
require_once 'controllers/HomeController.php';
require_once 'controllers/DashboardController.php';
require_once 'models/HomeModel.php';
//require_once 'models/DashboardModel.php';

$baseUrl = '/Busani-project';

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace($baseUrl, '', $uri);

// echo $uri;
// exit();

if ($uri === '/' || $uri === '') {
    $controller = new HomeController();
    
}

$controller->handleRequest();

