<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fechas</h1>
    <?php    
        $fecha=getdate();
        echo "Fecha actual:";
        echo "<br>";
        echo $fecha[ 'mday' ];
        echo "<br>";
        echo $fecha[ 'mon' ];
        echo "<br>";
        echo $fecha[ 'year' ];
        echo "<br>";
        
        echo "fecha:" . $fecha[ 'mday' ]. "/". $fecha[ 'mon' ]. "/". $fecha[ 'year' ];
        echo "<br>";

        echo time();
        echo "<br>";

        print date("d/m/y G:i:s", time());
        echo "<br>";
        
        print date("d/m/y g:i:s a", time());
        echo "<br>";


        
    ?>
</body>
</html>