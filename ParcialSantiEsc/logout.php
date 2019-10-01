<?php
    
         session_start();
    
        session_destroy();
        echo "<script> alert('Cerraste la sesion!');";  
         echo "window.location = 'index.php'; </script>";


    
  
?>