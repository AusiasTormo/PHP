<?php

    //definir funciones
    function saludo() {
        echo "Hola caracola";
        echo "<br>";
    }

    //llamar a la funcion
    saludo();

    //definir funciones con parametros
    function saludoparametros($nom) {
        echo "Hola  $nom";
        echo "<br>";
    }
    $nombre="Ana";
    saludoparametros($nombre);
    
    function suma($num1, $num2) {
       $resultado = $num1 + $num2;
       echo "<br> Resultado:".$resultado;
    };
    $numero1=10;
    $numero2=20;

    suma($numero1, $numero2); 

    function resta($num1, $num2) {
        $resultado = $num1 - $num2;
        echo "<br> Resultado:".$resultado;
     };
     $numero1=10;
     $numero2=20;
 
     resta($numero1, $numero2); 

    function sumareturn($num1, $num2) {
        $resultado = $num1 + $num2;
        return $resultado;
     };
     $numero1=10;
     $numero2=20;

     $resultadosuma= sumareturn($numero1, $numero2); 

     echo "<br>Resultado suma: $resultadosuma";


    resta($resultadosuma, $numero2); 



    //funcion para buscar la posicion de un caracter
    function bucarletra($fra){
        echo "<br>encontrar caracteres" . " ". strchr($fra, "a");
    echo "<br>";
    };

    $frase1="¿hola como estas?";

    bucarletra($frase1);
?>