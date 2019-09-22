<?php
    function saludar ($idioma,$mensaje) {
        $saludo = ($idioma == "argentino" ) ? "Hola" : ( ($idioma == "ingles") ? "Hello" : "ola") ; 

        return $saludo . " " .$mensaje;
    } 

    function despedirse ($idioma,$mensaje) {
        $saludo = ($idioma == "argentino" ) ? "Chau" : (($idioma == "ingles") ? "Bye" : "adeus" ); 

        return $saludo . " ". $mensaje;
    } 

    function otro ($idioma,$mensaje) {
         

        return " " . $mensaje;
    }
?>