<?php
    include("header.php");
    include("nav.php");

    $jsonContent = file_get_contents("https://api.themoviedb.org/3/movie/now_playing?api_key=f78530630a382b20d19bddc505aac95d&language=en-US&page=1");
    file_put_contents("movie.json", $jsonContent ) ;
    $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
    /* METEMOS TODO EL CODIGO DE NAZI SOLO PARA MOSTERAR Y VER QUE ONDA */
    /*$json = json_encode($arrayToDecode, JSON_PRETTY_PRINT);
    file_put_contents("movie.json", $json ) ;
         

   
*/
    var_dump($arrayToDecode);
?>

<!--html-->





<?php include("footer.php");?>