<?php

$configs = require_once "config.php";

class DB_CONNECT{
    //required properties
        public $configs;
        public $email;
        public $password;
        public $address;
        public $city;
        public $province;

        public function __construct($email, $password, $address, $city, $province) {
            $this->configs = require("database/config.php");

            $this->email = $email;
            $this->password = $password;
            $this->address = $address;
            $this->city = $city;
            $this->province = $province;
        }

      
        public function PostToDB(){
            try {
                $conn = new PDO("mysql:host={$this->configs['servername']};dbname={$this->configs['database']}", $this->configs['username'], $this->configs['password']);
                // setting the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
                $stmt = $conn->prepare("INSERT INTO users (email, password, address, city, province) VALUES (:email, :password, :address, :city, :province)");
                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':password', $this->password);
                $stmt->bindParam(':address',$this->address);
                $stmt->bindParam(':city', $this->city);
                $stmt->bindParam(':province', $this->province);
                $stmt->execute();
            
                $_SESSION["user_email"] = $this->email;
                //echo "My New record created successfully";
                $_SESSION["status"] = "My New record created successfully";
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
               
            }

        }
    }