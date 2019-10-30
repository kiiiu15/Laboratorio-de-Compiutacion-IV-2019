<?php include("headerModificarCine.php");?>
<?php  
    $cine = null; /*En esta variable se deberia guardar el Cine que queremos modicar para sacar sus datos y asi colocarlos en los inputs
    editable para el usuario y que se guarden para para modificarlos */

    
?>
<div class="span3">
    <h2>Alta Cine</h2>
    <form action = "" method = "GET">
    <label for = "nombreCine">Nombre del Cine</label>
    <input type="text" name="nombreCine" class="span3"  placeholder = "<?php /* echo $cine-> get que corresponda ; */?>">
    <label  for="capacidad">Capacidad total</label>
    <input type="number" name="capacidad" class="span3" placeholder = "<?php /* echo $cine-> get que corresponda ; */?>">
    <label for="direccion">Direccion del Cine</label>
    <input type="text" name="direccion" class="span3" placeholder = "<?php /* echo $cine-> get que corresponda ; */?>">
    <label for="valorEntrada">Valor unico de entrada</label>
    <input type="number" name="valorEntrada" class="span3" placeholder = "<?php /* echo $cine-> get que corresponda ; */?>">
    <input type="submit" value="Guardar Cambios" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
    <style>
        *{
            clear: left;
        }
    </style>
</div>

<?php include("footer.php");?>