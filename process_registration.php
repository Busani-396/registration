<?php

//INITIATE SESSION
session_start();

require_once "database\connect_to_db.php";
require_once 'controllers\ProcessRegistrationController.php';
;

    $forward_to_dashboard = new ProcessController();

    $forward_to_dashboard->ProcessRegistrationHandler();




//echo "Hello dashboard";