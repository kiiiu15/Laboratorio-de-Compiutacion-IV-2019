<?php
    require ("autoload.php");
    use modelo\Cruiser as  Cruiser;
    use modelo\BattleShip as  BattleShip;
    use modelo\Airplane as  Airplane;
    
    //$array[];
    $array[]=new Cruiser ("Crucero", 5,2, 500);
    $array[]= new BattleShip ("Submarino", 4,2, array("arma1"=>"torpedos"));
    $array[] = new Airplane ("Airbus A330-300", 2, 192);

    for ($i=0;$i< count($array);$i++){
        echo $array[$i]->__toString() . "<br/>";
    }
?>