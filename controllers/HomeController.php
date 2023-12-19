<?php

class HomeController
{
    public function handleRequest()
    {
        
        $model = new HomeModel();
        $viewData = $model->getData();

        include 'views/home.php';
    }
}
