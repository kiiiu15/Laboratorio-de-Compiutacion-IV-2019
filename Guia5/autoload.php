<?php
    spl_autoload_register(function ($className){
        /*modelo\Aerial */
        $file = str_replace("\\","/",$className);
        /*modelo/Aerial*/ */
        $url= $file . ".php";

        /*modelo/Aerial.php*/ */
        include $url;
        /*include ("modelo/Aerial.php");*/ */
    });
?>