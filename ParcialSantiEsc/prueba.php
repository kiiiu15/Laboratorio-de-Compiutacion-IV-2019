<?php

require("config/autoload.php");

    use config\autoload as autoload;

    autoload::Start();

    use repository\UsersRepository as UsersRepository;
    use model\User as User;

    $newRepository = new UsersRepository();

    $array=array();

    $array=$newRepository->getAll();

    print_r($array);




?>