<?php
    require "../autoload.php";
    use modelo\Client as Client;
    if ($_POST){
            $userName = $_POST ["userName"];
            $passWord = $_POST ["passWord"];

        if ($userName != "bulzomia" || $passWord != "123") {
            header ("location: ../index.php");
        } else {
            $cliente = new Client ($userName, $passWord);
            session_start();
            $_SESSION[]=$cliente;
            

            header ("location: ../vista/add-bill.php");
        }
    } else {
        header ("location: ../index.php");
    }
?>