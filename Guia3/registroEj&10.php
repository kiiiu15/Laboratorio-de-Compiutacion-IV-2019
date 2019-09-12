
<?php
    include "header.php";
        if ($_POST) {
            $nombre = $_POST ["nombre"];
            $apellido = $_POST ["apellido"];
            $dni = $_POST ["dni"];
            
    
            if (empty($nombre) || empty ($apellido) || empty($dni)){
                
                header ("location:index.php");
            } else {?>

            <table border="1">
                <thead>
                    <td>
                        <?php echo "nombre";?>
                    </td>
                    <td>
                        <?php echo "apellido";?>
                    </td>
                    <td>
                        <?php echo "dni";?>
                    </td>
                </thead>
                <tr>
                    <td>
                        <?php echo $nombre;?>
                    </td>
                    <td>
                        <?php echo $apellido;?>
                    </td>
                    <td>
                        <?php echo $dni;?>
                    </td>
                </tr>
            </table>
                
           <?php }
        }
        include "footer.php";
?>
    


