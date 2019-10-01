<?php
    namespace modelo;
    class Transport {
        private $name;

        public function getName(){
            return $this->name;
        }
    
        public function setName($name){
            $this->name = $name;
        }

        public function __construct ($name = "") {
            $this->setName($name);
        }

        public function __toString(){
            return "Name: " . $this->getName();
        }
    }
?>