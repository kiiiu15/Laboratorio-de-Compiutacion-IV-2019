<?php
    function existeKeyArray ($array , $key) {
        foreach ($array as $key2 => $value ) {
            if ( $key2 ==  $key ) {
                return true;
            }
        }

        return false ; 
    } 



    function mostrarKeyArray ($array , $key) {
        if (existeKeyArray($array, $key) && !empty($array[$key]) ) {
            echo $array[$key];
        } else { 
            echo "undefined" ;
        }
    }

    function hayDatosVacios ( $array ) {
        foreach ( $array as $value ) {
            if (empty($value)) {
                return true ;
            }
        }
        return false ;
    }
    

?>