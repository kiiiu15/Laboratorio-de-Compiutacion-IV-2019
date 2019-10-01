<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    
    require('config\AutoLoad.php');
    use config\Autoload as Autoload;
    Autoload::Start();

    use model\User as User;
    use repository\UsersRepository as UsersRepository;

    $loggedUser=NULL;

    if($_POST)
    {
        
        if(isset($_POST["email"]) && isset ($_POST["pass"]))
        {
            $newRepository = new UsersRepository();
            $users=array();
            $users=$newRepository->getAll();
            
            foreach($users as $key =>$value)
            {
                if($_POST["email"]==$value->getEmail())
                {
                    if($_POST["pass"]==$value->getPassword())
                    {
                        
                        $loggedUser=$value;
                        

                    }
                }
            }
        }
        
    }

    if($loggedUser!=NULL)
    {
        session_start();
        $_SESSION["loggedUser"]=$loggedUser;
        header("location:users.php");


    }
    else
    {
        echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
	echo "window.location = 'index.php';
		</script>";
    }

    
    
  


?>