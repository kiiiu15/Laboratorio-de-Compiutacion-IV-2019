<?php 
include ("header.php");
$filtros = ["fecha", "categoria"];
?>

<nav>
    <!-- Este es el nav para poder poner filtros a la busqueda de peliculas-->
    <ul> <!-- Los filtros, deberiamos levantas todas la peliculas para poder resolver desde aca la que se muestrabn con un set visible-->
        <?php foreach ($filtros as $filtro) {?>
        <li><a href="<?php echo "?filtro = $filtro"?>"><?php echo $filtro; ?></a></li>
        <?php }?>
    </ul>
</nav>

<?php include ("footer.php");?>