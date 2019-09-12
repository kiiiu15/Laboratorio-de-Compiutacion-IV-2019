<?php
/*1.	Se tiene el siquiente string:
$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
*/


$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';

// a.	Crear un arreglo de nombres y mostrarlo por pantalla.

$arreglo = explode (",", $name);

var_dump ($arreglo);

echo "<br/> <hr/> <br/>";

//b. Ordenar alfabéticamente el arreglo de nombres de forma ascendente y mostrar por pantalla.
sort ($arreglo);
var_dump ($arreglo);

echo "<br/> <hr/> <br/>";

//c.	Convertir en mayúscula el primer caracter de cada nombre y pasarlo a un nuevo arreglo llamado $newArray. Mostrar por pantalla.
$newArray=[];
foreach ($arreglo as $nombre){
    ucfirst($nombre);
    array_push($newArray, $nombre);
}

?>