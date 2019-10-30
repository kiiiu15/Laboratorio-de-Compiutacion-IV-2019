
<!------ Include the above in your HEAD tag ---------->
<?php include("headerAltaCine.php");?>
<div class="span3">
    <h2>Alta Cine</h2>
    <form action = "" method = "GET">
    <label for = "nombreCine">Ingrese el Nombre del Cine</label>
    <input type="text" name="nombreCine" class="span3">
    <label  for="capacidad">Indique la capacidad total</label>
    <input type="number" name="capacidad" class="span3">
    <label for="direccion">Indique la direccion del nuevo Cine</label>
    <input type="text" name="direccion" class="span3">
    <label for="valorEntrada">Valor unico de entrada</label>
    <input type="number" name="valorEntrada" class="span3">
    <input type="submit" value="Crear" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
    <style>
        *{
            clear: left;
        }
    </style>
</div>




<?php 
    if (isset($_GET) && !empty($_GET)){
        echo "<br>";
        var_dump($_GET);
    }
?>

<?php include("footer.php");?>