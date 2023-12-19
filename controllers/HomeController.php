<?php

class HomeController
{
    public function handleRequest()
    {
        session_start();
        
        $model = new HomeModel();
        // for login = fetch data from db and expose to landing page
        $viewData = $model->getData();

        if(isset($_SESSION["user_email"]) && $_SESSION["user_email"] !== null) {
            include 'views/loggedIn.php';
        }
        else{
           // echo "already logged in";
            include 'views/home.php';
        }
    }
}
