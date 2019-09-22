<?php
session_start();
require "../autoload.php";

use modelo\Item as Item;

$array = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
pintura fluor 1L, pintura warner fluo, 400.00, 3,
plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
pincel común 1.2, pincel fabber cerda común para tempera, 120.00, 5,
rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2,
kit de acuarelas, combo de acuarelas color pastel, 770.00, 2 ";

$datos= explode(",", $array);

var_dump($datos);

for ($i=0 ; $i < count($datos) ; $i = $i+4 ) {
    
    $item = new Item ($datos[$i], $datos[$i+1] , $datos[$i+2] , $datos[$i+3] );
    $_SESSION[]=$item;

}

var_dump($_SESSION);


header("location: ../vista/bill-content.php");



?>