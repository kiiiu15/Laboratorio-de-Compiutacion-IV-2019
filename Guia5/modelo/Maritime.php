<?php 
    namespace modelo;    
    require ("autoload.php");

    use modelo\Transport as Transport; 
    class Maritime extends Transport {
        private $maxKnots;

        public function getMaxKnots(){
            return $this->maxKnots;
        }
    
        public function setMaxKnots($maxKnots){
            $this->maxKnots = $maxKnots;
        }
        
        public function __construct ($name = "", $maxKnots = 0 ) {
            parent::__construct($name);
            $this->setMaxKnots($maxKnots);
        }

        public function __toString(){
            return parent::__toString() . " MaxKnots: " . $this->getMaxKnots();
        }

    }

?>