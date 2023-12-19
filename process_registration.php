<?php

//INITIATE SESSION
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['REQUEST_METHOD'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];

    // Set session variables
    $_SESSION["user_email"] = $email;

    // Redirect to ----- dashboard
    header('Location: /Busani-project/dashboard.php');
    exit;

    echo $province;
}




echo "Hello dashboard";