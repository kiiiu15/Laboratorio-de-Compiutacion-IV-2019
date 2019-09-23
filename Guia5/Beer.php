<?php
    namespace modelo

    class Beer {
        private $code; 
        private $name;
        private $description;
        private $type;

        public function getCode(){
            return $this->code;
        }
    
        public function setCode($code){
            $this->code = $code;
        }
    
        public function getName(){
            return $this->name;
        }
    
        public function setName($name){
            $this->name = $name;
        }
    
        public function getDescription(){
            return $this->description;
        }
    
        public function setDescription($description){
            $this->description = $description;
        }
    
        public function getType(){
            return $this->type;
        }
    
        public function setType($type){
            $this->type = $type;
        }

        public function __construct ($code = 0, $name = "", $descripion = "", $type = ''){
            $this->setCode($code);
            $this->setName($name);
            $this->setDescription($descripion);
            $this->setType($type);
        }

    } 
?>