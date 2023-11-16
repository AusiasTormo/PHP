<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso PHP</title>
</head>
<body>

    <h1>Primer uso de PHP</h1>

    <?php
    // Hola
    echo 'Hola Caracola';
    echo '<br>';
    echo '<h1>Linea con h1 desde PHP</h1>';
    echo '<br>';
    ?>

    <h2>Otro bloque de</h2>

    <?php
    $nombre = 'Brian';
    $edad = '19';

    // Echo del contenido de la variable
    echo $nombre;

    // Concatenación de variables
    echo '<h3>Mi nombre es ' . $nombre . '</h3>';
    echo '<br>';
    echo '<h3>Mi nombre es . $nombre . </h3>'; // Esto no muestra el valor de la variable

    // Interpolación variables y texto
    echo "<h3>Mi edad: $edad </h3>";
    ?>

    <h2><?php echo 'Hola'?></h2>

    <!-- CONDICIONALES -->
    <h2>Condicionales if - else</h2>

    <?php
    $resultado = 5;
    // Sintaxis de comparación <=, <
    if ($resultado >= 5){
        echo '<h3 style="color:green">Prueba superada</h3>';
    } else {
        echo '<h3 style="color:red">Prueba suspendida</h3>';
    }
    ?>

    <h2>Condicional if - elseif - else</h2>

    <?php
    $resultado = 'A';
    if ($resultado == 'A'){
        echo '<h3 style="color:green">Prueba superada fantástico!</h3>';
    } else {
        echo '<h3 style="color:red">Prueba NO superada</h3>';
    }
    ?>

    <h2>Condicional con switch</h2>

    <?php
    $resultado = 'A';
    switch ($resultado){
        case 'A':
            echo '<h3 style="color:green">Prueba superada fantástico!</h3>';
            break;
        case 'B':
            echo '<h3 style="color:yellow">Prueba superada al límite</h3>';
            break;
        default:
            echo '<h3 style="color:red">Prueba NO superada</h3>';
            break;
    }
    ?>
    <footer>
            <p style="text-align=center">
            Creado por 2Asir<?php echo "<br>" $fecha = getdate();
            echo "fecha:" . $fecha[ 'mday' ]. "/". $fecha[ 'mon' ]. "/". $fecha[ 'year' ];
            echo "<br>";?>
            
            </p>

    </footer>
</body>
</html>