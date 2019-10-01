<?php
namespace modelo;    
    require ("autoload.php");

    use modelo\Ship as Ship;

    class Cruiser extends Ship {
        private $capacity;

        public function getCapacity(){
            return $this->capacity;
        }
    
        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }

        public function __construct ($name = "", $maxKnots = 0, $propelQuantity = 0, $capacity = 0 ) {
            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->setCapacity($capacity);
        }

        public function __toString(){
            return parent::__toString() . " Capacity: " . $this->getCapacity();
        }

        
    }

?>