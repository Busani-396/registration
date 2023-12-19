<?php

// Include the necessary files
require_once 'controllers/HomeController.php';
require_once 'controllers/DashboardController.php';
require_once 'models/HomeModel.php';
//require_once 'models/DashboardModel.php';

$baseUrl = '/Busani-project';

//get the uri
$uri = $_SERVER['REQUEST_URI'];

// Remove the base URL from the request URI
$uri = str_replace($baseUrl, '', $uri);

// echo $uri;
// exit();

if ($uri === '/' || $uri === '') {
    $controller = new HomeController();
}else {
    // Handle 404 - Not Found
    include 'views/404.php';
    exit;
}

$controller->handleRequest();

