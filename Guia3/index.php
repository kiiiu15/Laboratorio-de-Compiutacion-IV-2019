<?php
    //1
    //a.	¿Qué valor se espera si hacemos $myNumber + $numberString? 
    $num = 123;
    $str = "123";
    $resultado = $num + $str;
    echo "El resultado es ".$resultado . "<br/>";    // Resultado 246


    //b.	¿Y si hacemos la operación inversa?
    $resultado = $str + $num;
    echo "Operacion inversa: $resultado <br/>"/*. "<br/>"*/;  // Si era inversa cambiando el orden. Resultado: 246
    $resultado = $num - $str;
    echo "Operacion inversa B: $resultado <br/>" /*. $num - $str /*. "<br/>"*/;  // Si era haciendo resta. Resultado: 0

    //c.	¿Y si hacemos $myNumber.$numberString?

    echo $num.$str . "<br/>"; //Resultado: 123123
    echo "<hr/>" ;
    
    //2.	Si cambiamos la condición del siguiente if por los valores en la lista, ¿obtendremos siempre en pantalla un cartel que diga “Es correcto”? Pruebe en una consola y responda:
        /*a.	1 == ”1” : Resultado: si
            b.	1 === ”1” : Resultado: no
            c.	! null : Resultado: si
            d.	! false : Resultado: si
            e.	“” : Resultado: no
            f.	“ “ : Resultado: si
            g.	“tested” : Resultado: si
            h.	1-1 : Resultado: no
        */
        if(1-1){
            echo "Si"; 
        }else {
            echo "No";
        }

        echo "<hr/>" ;

    //3.	Cree dos funciones, una que permita multiplicar y otra que permita dividir. Pruébelas en pantalla inventando valores. ¡No olvide evitar errores matemáticos!
        
        function multiplicar ($num=1, $num2 = 1){
            return $num * $num2 ; 
        }

        function dividir ($num=1, $num2 = 1){
            if ($num2 == 0){
                return null;    
            }
            return $num / $num2 ; 
        }

        echo dividir(10,2) . "<br/>";
        echo "<hr/>" ;

    //4.	¿Cuál es el largo del siguiente arreglo? ¿Y su contenido?

    $array = [  
        1     => "first value",
        "1"  => "second value",    
        1.2  => "tirth value",    
        true => "fourth value",    
        1+0.2 => "fifth value",    
        false !== null => "sixth value", 
        ];

    echo count($array); //1 (???)
    echo "<hr/>" ;
    var_dump ($array); //(saltomo tomo el "sixth value")
    echo "<hr/>" ;


    //5.	Partiendo del siguiente arreglo de personas ‘people’:

    $people = [ 
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
    ];

    //a.	Imprima por pantalla el total de mayores de edad.

    
    for ( $i=0; $i<count($people); $i++){
        if ($people[$i]['age'] >= 18){
            var_dump ($people[$i]);
        }
    }


    echo "<hr/>" ;
    //b.	De mujeres menores de edad. 
    for ( $i=0; $i<count($people); $i++){
        if ($people[$i]['age'] < 18 && $people[$i]['sex'] == 'f' ){
            var_dump ($people[$i]);
        }
    }

    echo "<hr/>" ;

    //c.	Cree una web que muestre una tabla con esos datos. 

    echo "<table>";
            $value = $people[0];
          foreach ($value as $key => $data){
            echo "<th>".$key."</th>";
          }


        echo "<br/>";

        foreach ($people as $row){
            echo "<tr>";
                foreach ($row as $colum){
                    echo "<td>" . $colum . "</td>";
                }
            echo "</tr>";
        }
    echo "</table>";

    echo "<br/>" ;
    echo "<hr/>" ;

    //d.	Redúzcalo hasta obtener un arreglo de edades únicamente.
    var_dump ($people);
    foreach ($people as $value){
        //var_dump($value);
        foreach ($value as $key => $value2){
            if ($key != 'age'){
                $prueba = $value [$key];
                var_dump ($prueba);
                unset($prueba);
            } 
        }
    }
    echo "<br/>";

    var_dump ($people);
?>