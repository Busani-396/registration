<?php

require_once 'controllers/LogoutHandle.php';
//logout page

try {
    $logout = new LogoutController();
    $logout->handleRequest();
} catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}
