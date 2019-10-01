<?php

require('config\AutoLoad.php');
use config\Autoload as Autoload;


use model\User as User;
use repository\UsersRepository as UsersRepository;
use repository\IRepository as IRepository;

Autoload::Start();

if($_POST)
{
    $newUser = new User($_POST["name"],$_POST["dni"],$_POST["birthdate"],$_POST["email"],$_POST["pass"]);
    $repository = new UsersRepository();
    $userList = array();
    $userList=$repository->getAll();
    

    
    
    foreach ($userList as $key => $valuesArray) {
        if($newUser->getEmail()== $valuesArray->getEmail())
        {
           
            $userExist = true;
        }
        else
        {
            $userExist = false;
        }
    }

    if($userExist==false) {
        $repository->add($newUser);
        $successMje = 'Usuario agregado con éxito';
    } else {
        $errorMje = 'El usuario ya existe';
    }
    
    include('index.php');

}










?>