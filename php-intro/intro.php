<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Uso PHP</title>

</head>

<body>

    <H1>Primer uso de PHP</H1>

   

    <?php

    //Holaa

    echo 'Hola Caracola';

 

    //Puedes añadir etiquetas como texto

 

    echo '<br>';

 

    echo '<h1>Linea con h1 desde PHP</h1>';

 

    echo '<br>';

 

    ?>

 

    <h2>Otro bloque de</h2>

 

    <?php

    $nombre='Brian';

 

    $edad='19';

 

   

    //echo del contenido de la variable

 

    echo $nombre;

 

    //concatenacion de variables

 

    echo '<h3>Mi nombre es ' . $nombre . '</h3>';

    echo '<br>';

    echo '<h3>Mi nombre es . $nombre . </h3>'; //esto no muestra el valor de la variable

 

    //Interpolación variables y texto

    echo "<h3>Mi edad: $edad </h3>"

   

 

    ?>

 

<h2><?php echo 'Hola'?></h2>

 

<!-- CONDICIONALES -->

<h2>Condicionales if - else</h2>

 

<?php

$resultado = 5;

//sintaxis de comparación <=, <

if ($resultado >= 5){

    echo '<h3 style="color:green">Prueba superada</h3>';

}

else{

    echo '<h3 style="color:red">Prueba suspendida</h3>';

}

 

?>

 

<h2>Condicional if - elseif - else</h2>

<!-- Nos permite poder realizar más de una comparación-->

 

<?php

$resultado = 'A';

 

if($resultado == 'A'){

    echo '<h3 style="color:green">Prueba superada fantástico!</h3>';

}

else{

    echo '<h3 style="color:red">Prueba NO superada</h3>';

}

?>

 

<h2>Condicional con switch</h2>

<?php

$resultado = 'A';

 

switch($resultado){

    case 'A';

        echo '<h3 style="color:green">Prueba superada fantástico!</h3>';

        break;

    case 'B';

        echo '<h3 style="color:yellow">Prueba superada al límite</h3>';

        break;

    default;

        echo '<h3 style="color:red">Prueba NO superada</h3>';

        break;

}

?>

 

</body>

</html>
