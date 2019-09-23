<?php
    spl_autoload_register(function ($className){
        
        $file = explode ("\\", $className);
        $url=$file [1]. ".php";
        include $url;
    });
?>