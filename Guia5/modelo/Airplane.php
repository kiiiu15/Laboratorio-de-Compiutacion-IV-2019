<?php
    namespace modelo;    
    require ("autoload.php");

    use modelo\Aerial as Aerial; 
    class Airplane extends Aerial {
        private $capacity;

        public function getCapacity(){
            return $this->capacity;
        }
    
        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }

        public function __construct ($name = "" , $engineQuantity = 0 , $capacity = 0 ) {
            parent::__construct($name, $engineQuantity);
            $this->setCapacity($capacity);
        }

        public function __toString() {
            return parent::__toString() . " Capacity: " . $this->getCapacity();     
        }
    }

?>