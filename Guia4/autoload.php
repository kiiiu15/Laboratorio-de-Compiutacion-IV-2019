<?php
    spl_autoload_register (function ($className){
        echo $className;
        $fileUrl = str_replace("\\", "/",$className) . ".php";

        include ($fileUrl);
    })
?>