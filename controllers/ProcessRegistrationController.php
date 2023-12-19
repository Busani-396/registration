<?php


class ProcessController{

    public function ProcessRegistrationHandler(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['REQUEST_METHOD'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $province = $_POST['province'];

            if (empty($email) || empty($password) || empty($address) || empty($city) || empty($province)) {
                echo "Please fill in all the required fields.";
                header('Location: /Busani-project/');
                exit;
            }

            $mydb = new  DB_CONNECT($email, $password,$address,$address,$city,$province);
            $mydb->PostToDB();

        //  echo "mission accomplished";
        //redirect user to dashboard
            header('Location: /Busani-project/dashboard.php');
        }

        }
    }
