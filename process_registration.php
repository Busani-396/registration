<?php

//INITIATE SESSION
session_start();

require_once "database\connect_to_db.php";
require_once 'controllers\ProcessRegistrationController.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

    $forward_to_dashboard = new ProcessController();

    //submit to database and redirect
    $forward_to_dashboard->ProcessRegistrationHandler();




//echo "Hello dashboard";