<?php
    namespace modelo;    
    require ("autoload.php");

    use modelo\Ship as Ship;

    class BattleShip extends Ship {
        private $armament;

        public function getArmament(){
            return $this->armament;
        }
    
        public function setArmament($armament){
            $this->armament = $armament;
        }

        public function __construct ($name = "", $maxKnots = 0, $propelQuantity = 0, $armament = array()){
            parent::__construct($name, $maxKnots, $propelQuantity);
            $this->setArmament($armament);
        } 

        public function __toString(){
            return parent::__toString() . " Armament: " . implode(",", $this->getArmament());  
        }
    }
?>