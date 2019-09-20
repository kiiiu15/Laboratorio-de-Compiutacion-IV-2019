<?php
    namespace modelo;
    class Client {
        private $userName;
        private $password;

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

        public function __construct ($userName = "" , $password = "" ) {
            $this->setUserName($userName);
            $this->setPassword($password);
            
        }
    }

?>