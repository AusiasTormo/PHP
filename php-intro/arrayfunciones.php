<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones array</title>
</head>
<body>
    <h2>Funciones array</h2>
    <h3>array_slice - array_esplice</h3>
    <?php
        //cortar array
        $array=array('a','b','c','d','e','f','g');
        
        
        $slice= array_slice($array,2);

        foreach($slice as $letra){
            echo "$letra <br>";
        }

        $slice= array_slice($array,2,3);

        foreach($slice as $letra){
            echo "$letra <br>";
        }
        echo "<br>";

        //sustituir partes del array

        $array=array('a','b','c','d','e','f','g');

        array_splice($array,2,2, array("x", "y") );
        
        foreach($array as $letra){
            echo "$letra <br>";
        }

    ?>
    <h3>array_push - array_pop</h3>

    <?php

        $array=array('a','b','c','d','e','f','g');
        $ultimoelemento = array_pop($array);

            echo "<br> Elemento extraido: $ultimoelemento <br>";
        foreach($array as $letra){
            echo "$letra <br>";
        }
            echo "<br>";

        //agergar elementos nuevos al final

        $array=array('a','b','c','d','e','f','g');
            array_push($array, 'h','i','j');

        foreach($array as $letra){
            echo "$letra <br>";
        }
        echo "<br>";

    ?>
    
    <h3>array_shift - array_unshift</h3>
    <?php

        //extraer el primer elemento de un array
        $array=array('a','b','c','d','e','f','g');
        $primerelemento=array_shift($array);
        echo "<br> Elemento extraido: $primerelemento <br>";
        foreach($array as $letra){
            echo "$letra <br>";
        }
        echo "<br>";

        //añadir elementos al rpinsipio de array
        $array=array('a','b','c','d','e','f','g');
        array_unshift($array, $primerelemento);
        foreach($array as $letra){
            echo "$letra <br>";
        }
        echo "<br>";


        
    ?>
    <h2>sort - array_reverse</h2>

    <?php
    //ordena en orden alfabético
        $array=array("x", "f", "e", "g", "b");
        sort($array);
        
        foreach($array as $letra){
            echo "$letra <br>";
        }
        echo "<br>";

//ordena en orden inverso
        $reverse=array_reverse($array);
        foreach($reverse as $letra){
            echo "$letra <br>";
        }
        echo "<br>";

    ?>
    <h2>array_unique</h2>

    <?php
    
    $array=array("x", "f", "e", "b", "g", "b", "e");
    $unico=array_unique($array);
    
    foreach($unico as $letra){
        echo "$letra <br>";
    }
    echo "<br>";

    
    ?>
    <h2>array_search</h2>
    <?php
    //realiza una busqueda y devuelve el índice
        $array=array("x", "f", "e", "b", "g", "b", "e");

        $index=array_search("e", $array);

        echo "<br> $index <br>";

        $index=array_search("b", $array);

        echo "<br> $index <br>";

        //con en indice buscamos la letra dentro del array 
        echo $array [$index];
    ?>
    <h2>in_array</h2>
    <?php
    $array=array("x", "f", "e", "b", "g", "b", "e");
    $existe=in_array("x", $array);
//var_dump sirve para mostar el codigo interno de php
    var_dump($existe);
    echo "<br>$existe<br>";
    ?>

    <h2>array_key_exists</h2>

    <?php
        $edades = array("Ana"=>25, "Luis"=>35, "Pepe"=>23);
        $existe=array_key_exists("Ana", $edades);

        var_dump($existe);
        echo "<br>$existe<br>"
    ?>
</body>
</html>