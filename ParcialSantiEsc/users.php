

<?php 

require_once "model/User.php";
//require_once "repository/UsersRepository.php";
require_once "config/AutoLoad.php";

use repository\UsersRepository as UsersRepository;

session_start();
if(isset($_SESSION['loggedUser'])){
	$user = $_SESSION['loggedUser'];
}
?>
<?php

if($_SESSION['loggedUser']) {

    include('header.php');
    include('nav.php'); 
}
else
{
    header("Location:index.php"); 

}

if (isset($_GET) && !empty($_GET)){
    $emailDelUsuarioAEliminar= $_GET ["delete"];
    spl_autoload_register(array("Autoload", "Start"));
    //Autoload::start();
    $objeto = new UsersRepository(); /**Objeto que se usa para traer TODOS los usuarios del Archivo */
    $usuarios = $objeto->getAll(); /**Ahora en $usuarios estan todos los users*/
    //array_unshift($usuarios, $user);

    //var_dump($usuarios);
    $usuarioAEliminar=null; /**aca guardas el usuario que vamos a buscar dentro del arreglo $usuarios por el email, como todavia nop lo encontramos es null */
    foreach ($usuarios as $user){ //Recorremos el arreglo
        if ($user->getEmail() == $emailDelUsuarioAEliminar ) {//comparamos el atributo mail de cada objeto user guardado en cada posicion con el que buscamos 
            $usuarioAEliminar = $user; // si coincide lo guardamos.
        }
    }

    if ($usuarioAEliminar != null) {
        $objeto->delete($usuarioAEliminar);
    }


}

    ?>

    <main class="p-5">
        <div class="container">

            <h1 class="mb-5">Listado de usuarios</h1>


            <form class="form-inline" action="multiaction.php" method="POST">
                
                <div class="form-group mb-4">
                    <label for="">Accion múltiple</label>
                    <select name="action" class="form-control ml-3">
                        <option value="">Eliminar</option>
                        <option value="">Habilitar</option>
                        <option value="">Inhabilitar</option>
                    </select>
                    <button type="submit" class="btn btn-dark ml-3">Enviar</button>
                </div>
                

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Fecha de nacimiento</th>
                            <th>Email</th>
                            <th>PassWord</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($usuarios as $user ) {?>
                            <tr>
                                <td><input type="checkbox" name="userschecked[]" /></td>
                                <td><?php echo $user->getName() ?></td>
                                <td><?php echo $user->getDni() ?></td>
                                <td><?php echo $user->getBirthdate() ?></td>
                                <td><?php echo $user->getEmail() ?></td>
                                <td><?php echo $user->getPassword() ?></td>
                                <td>
                                    <a href="?delete=<?php echo $user->getEmail() ?>" class="btn btn-light">
                                        <object type="image/svg+xml" data="icons/trash-2.svg" width="16" height="16"></object>
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                    </tbody>
                </table>
            </form>

            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </main>

    <?php include('footer.php'); ?>


