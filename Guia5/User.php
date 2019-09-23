<?php
    namespace modelo;

    class User {
        private $userName; 
        private $password;
        private $firtName; 
        private $lastName; 
        private $email; 

        public function getUserName(){
            return $this->userName;
        }
    
        public function setUserName($userName){
            $this->userName = $userName;
        }
    
        public function getPassword(){
            return $this->password;
        }
    
        public function setPassword($password){
            $this->password = $password;
        }
    
        public function getFirtName(){
            return $this->firtName;
        }
    
        public function setFirtName($firtName){
            $this->firtName = $firtName;
        }
    
        public function getLastName(){
            return $this->lastName;
        }
    
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }


        public function __construct ($userName = "admin", $password = "admin", $firtName = "", $lastName = "", $email = "example@hotmail.com" ) {
            $this->setUserName($userName);
            $this->setPassword($password);
            $this->setFirtName($firtName);
            $this->setLastName($lastName);
            $this->setEmail($email);
        }
    }
?>