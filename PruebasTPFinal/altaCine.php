<?php  include ("header.php"); ?>
    <form action="" method = "POST">
        <label for="nombreCine"  > Ingrese el nombre del Cine</label>   <!--nombre del cine, su capacidad total, dirección y valor único de entrada-->
        <input type="text" name="nombreCine" >
        <label for="capacidad" > Indique la capacidad total</label>
        <input type="number" name="capacidad" >
        <label for="direccion" >Indique la direccion del nuevo Cine</label>
        <input type="text" name="direccion"  >
        <label for="valorEntrada" >Valor unico de entrada</label>
        <input type="number" name = "valorEntrada" >
        <button type = "reset" >Reset</button>
        <button type = "submit" >Enviar</button>
    </form>

        <!--Aplicamos un css facilon para que no nos duelan tanto los ojos-->
    <style> 
        * {
            box-sizing: border-box;
            padding : 0;
        }
        form {
            display : inline-block;
            border : "1";
            background-color : gray ;
        }

        form input {
            width : 90%;
            
        }

        form label, form input {
            display : block;
        }

        form button {
            display : inline;
        }

        form label, form input, form button {
            margin : 5px;
        }

        




    </style>

    <?php 
        if ($_POST){
            var_dump($_POST);
        }
    ?>

<?php  include ("footer.php"); ?>