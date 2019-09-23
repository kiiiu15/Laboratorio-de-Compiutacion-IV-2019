<?php
    namespace modelo;    
    require ("autoload.php");

    use modelo\Maritime as Maritime; 
    class Ship extends Maritime {
        private $propelQuantity;

        public function getPropelQuantity(){
            return $this->propelQuantity;
        }
    
        public function setPropelQuantity($propelQuantity){
            $this->propelQuantity = $propelQuantity;
        }

        public function __construct($name = "", $maxKnots = 0, $propelQuantity = 0){
            parent::__construct($name, $maxKnots);
            $this->setPropelQuantity($propelQuantity);
        }

        public function __toString(){
            return parent::__toString() . " PropelQuantity: " . $this->getPropelQuantity();            
        }
    }
?>