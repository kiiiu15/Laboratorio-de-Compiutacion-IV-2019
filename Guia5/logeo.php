<?php
    require "autoload.php";
    include "header.php";
    use modelo\User as User;

    $userValidos[]= new User ("SSoler", "cosme1234", "Sebastian", "Soler", "sebastian@utn.com");
    $userValidos[]= new User ("AzarJ", "alAzar123", "Juan", "Azar", "juan_azar@utn.com");
    $userValidos[]= new User ("Mari123", "123456Mari", "Maria", "Perez", "mariap@utn.com");

    function chequearUsuario ($usuario, $constraseña , $userValidos) {
        for ($i = 0 ; $i < count($userValidos) ; $i++){
            if ($usuario == $userValidos[$i]->getUserName()){
                if ($constraseña == $userValidos[$i]->getPassword()) {
                    return true;
                }
            }
        }
        return false;
    }

    function recuperarUsuario ($userName, $userValidos){
        for ($i = 0 ; $i < count($userValidos) ; $i++){
            if ($userName == $userValidos[$i]->getUserName()){
                return $userValidos[$i];
            }
        }
        
        return null;
    }

    if ($_POST){
        $user=$_POST["usuario"];
        $pass=$_POST["contraseña"];

        if (chequearUsuario($user, $pass , $userValidos)){
            $usuario = recuperarUsuario($user, $userValidos);
            if (isset($usuario)){?>
            <table border="1">
                <thead>
                    <td>UserName</td>
                    <td>PassWord</td>
                    <td>FirstName</td>
                    <td>LastName</td>
                    <td>Email</td>

                </thead>
                <tbody>
                    <td><?php echo $usuario->getUserName();?></td>
                    <td><?php echo $usuario->getPassword();?></td>
                    <td><?php echo $usuario->getFirtName();?></td>
                    <td><?php echo $usuario->getLastName();?></td>
                    <td><?php echo $usuario->getEmail();?></td>
                </tbody>

            </table>

            <?php } else {
                header("location: index.php");
            }
        } else {
            header("location: index.php");
        }
    }
    

    include "footer.php"
?>