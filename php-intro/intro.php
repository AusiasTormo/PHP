<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso PHP</title>
</head>
<body>
    <h1>Primer uso de php</h1>
    <?php 
    //Comentarios en PHP
    echo 'Hola caracola';
    
    //Puedes añadir etiquetas como texto
    echo '<br>';
    echo '<h1>Linea con h1 desde PHP</h1>';
    echo '<br>';
    ?>
    <h2>otro bloque de</h2>
    <?php

    //Añadimos variables al entorno
    $nombre='Ausias';
    $edad='19';
    
    //echo del contenido de la variable
    echo $nombre;

    //concatenacion de variables
    echo '<h3>Mi nombre es ' . $nombre . '</h3>';
    
    //interpolacion de variables y texto
    echo "<h3> Mi edad es: $edad </h3>"

    
    
    ?>
    <h2>Condicional con switch</h2>
    <?php
    $resultado = 'C';
    switch ($resultado) {
        case 'A':
            echo '<h3 style="color:green">Prueba superada fantastico</h3>';
            break;
        case 'B':
            echo '<h3 style="color:blue">Prueba superada fantastico</h3>';
            break;  
        case 'C':
        
        }

    ?>
</body>
</html>
