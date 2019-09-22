<?php 
    include "funciones.php";
    if ($_POST) {
        $accion = $_POST ["accion"];
        $idioma = $_POST ["idioma"];
        $mensaje = $_POST ["mensaje"];

        $mensajeProcesado = call_user_func($accion, $idioma, $mensaje);

        header ("location: greet.php ? mensajeProcesado=$mensajeProcesado");
    } else {
        header("location: index.php");
    }

?>