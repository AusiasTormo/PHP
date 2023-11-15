<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frase1="¿hola como estas?";
    $frase2="muy bien gracias";
    $frase3="TODO EN MAYUSCULAS";

    echo $frase1 . " " . $frase2;
    echo "<br>";

    //Transormación de textos

    echo "Mayusculas primera letra" . " " . ucfirst($frase2);
    echo "<br>";
    echo "Mayusculas primera letra de cada palabra" . " " . ucwords($frase2);
    echo "<br>";
    echo "texto en mayusculas" . " " . strtoupper($frase2);
    echo "<br>";
    echo "texto en minusculas" . " " . strtolower($frase3);
    echo "<br>";

    //Encontrar Caracteres
    echo "encontrar caracteres" . " ". strchr($frase1, "a");
    echo "<br>";

    //reemplazar caracteres
    echo "reemplazar caracteres". " ". str_replace("hola", "adios", $frase1);
    ?>
</body>
</html>