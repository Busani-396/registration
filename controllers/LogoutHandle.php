<?php

class LogoutController{
    public function handleRequest()
    {
        session_start();
        $_SESSION = array();

        // Redirect to home page
        header('Location: /Busani-project/');
        exit;
    }
}
