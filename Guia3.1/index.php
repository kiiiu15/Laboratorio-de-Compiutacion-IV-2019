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
   
    array_push($newArray,  ucfirst($nombre));
}

var_dump ($newArray);

echo "<br/> <hr/> <br/>";


// d.	Obtener la cantidad de valores de $newArray. Crear un nuevo arreglo con enteros llamado $keys. Obtener la cantidad del mismo. Chekeando ambas cantidades colocadas en dos variables, utilizar la función array_combine() para generar un nuevo arreglo llamado $arrayAssociative.Las cantidades deben ser iguales.
    $cantidadValores = count($newArray);

    $keys = [];

    for ($i = 1; $i <= $cantidadValores; $i++){
        $keys []= $i;
    }
    

    $cantidadKeys = count($keys);
    $arrayAssociative= ( $cantidadValores == $cantidadKeys ) ? array_combine ($keys , $newArray) : null ;

// e.	Mostrar por pantalla $ arrayAssociative..

    var_dump ($arrayAssociative);

    echo "<br/> <hr/> <br/>";

// 2.	Hacer una función que reciba como parámetros un valor y un array y mostrar por pantalla un mensaje que informe si ese valor existe o no en el array. Verificar resultado llamando a dicha función.

    function estaEnArray ($array , $valor) {
        foreach ($array as $value) {
            if ($value == $valor) {
                return true;
            }
        }
        return false;
    } 

    echo (estaEnArray ($newArray, "Andrea")) ?  "Si esta"  : "No esta" ;

    echo "<br/> <hr/> <br/>";

    
?>