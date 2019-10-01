<?php
    namespace modelo;    
    require ("../autoload.php");
   
    use modelo\Transport as Transport; 
    class Aerial extends Transport {
        private $engineQuantity;

        public function getEngineQuantity(){
            return $this->engineQuantity;
        }
    
        public function setEngineQuantity($engineQuantity){
            $this->engineQuantity = $engineQuantity;
        }

        public function __construct ($name = "" , $engineQuantity = 0 ) {
            parent::__construct($name);
            $this->setEngineQuantity($engineQuantity);
        }

         public function __toString(){
            return parent::__toString() . " Engine Quantity: " . $this->getEngineQuantity(); 
        }
    }
?>