<?php
    include "CosasGuia2/header.html";
    include "funciones/functions.php";
?>

<?php


     $parameters = array();

     if ($_SERVER['REQUEST_METHOD'] == "POST")
         $parameters = $_POST;
     else{
         $parameters = $_GET;
     }

     //var_dump ($parameters);

     
     if ( existeKeyArray($parameters,"nombre") && existeKeyArray($parameters,"mail") && existeKeyArray($parameters,"pass") && existeKeyArray($parameters,"bday") ) {
        $personalData = array ("nombre" => $parameters["nombre"] , 
                                "mail" => $parameters["mail"] , 
                                "pass" => $parameters["pass"] , 
                                "bday" => $parameters["bday"] 
                                ) ;

        if (hayDatosVacios($personalData)) {

            header ("location: index.php");

        } else {

            if (array_key_exists("sex", $parameters)){

                $personalData["sex"] = $parameters ["sex"];

            } else {
                $personalData["sex"] = "";
            }


            $profileInfo = array_diff ($parameters,$personalData) ; // array con las claves valores que  no estan en $personalData
            
            $keys = array_keys($personalData);
          

        ?>
        <table border = 1  >
            <thead > <td colspan = "2" class="lineaVerde"> Your basic info</td> </thead>
            <tbody>
             <?php foreach ( $keys as $value ) {  ?>    
                <tr>
                    <td >
                        <?php echo $value ; ?>
                    </td>
                    <td >
                        <?php mostrarKeyArray($personalData, $value);?>
                    </td>
                    
                </tr>
             <?php } ?>
                <tr ><td colspan = "2" class = "lineaVerde"> Your Profile</td> </tr>
                <tr>
                    <td class = "lineaGris"> About you </td>
                    <td class = "lineaGris"> <?php mostrarKeyArray($profileInfo, "about_you")?> </td>
                </tr>
                <tr>
                    <td> Role </td>
                    <td> <?php mostrarKeyArray($profileInfo, "roles")?> </td>
                </tr>

                <tr>
                    <td class = "lineaGris"> Intereses</td>
                    <td class = "lineaGris">
                        <?php

                            for ($i=1; $i<=6;$i++) {

                                if (array_key_exists("intereses".$i,$profileInfo)){
                                    echo $profileInfo["intereses".$i] . "<br/>";
                                }

                            }

                        ?>
                    </td>

                </tr>



            </tbody>
        </table>
        <style>
            .lineaVerde  {
                background-color : green;
            }

            .lineaGris {
                background-color : gray;
            }




        </style>
        <br/>
        <a href="index.php">Go back</a>

      <?php  } ?>
        
         
    <?php } 
?>


<?php
    include "CosasGuia2/footer.html";
?>