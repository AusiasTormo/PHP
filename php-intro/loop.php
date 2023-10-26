<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h2>For Loop</h2>
    <?php
        for($i=0; $i<10; $i++){
            echo "Hola <br>";
        };

        for($i=1; $i<10; $i++){
            echo "Hola: $i <br>";
        };
    ?>

    <h2>While loop</h2>
    <?php
        $var=0;
        while($var<10){
            echo 'Hola caracola <br>';
            $var++;
        }
        //Cambio de estado
        $var=TRUE;
        $i=0;
        while($var==TRUE){
            echo 'Dentro del bucle <br>';
            $i++;
            if($i>=10){
                $var=FALSE;
            };
        };
    ?>
    <?php
        $var=0;
        do{
            echo 'Hola caracola<br>';
            $var++;
        }while ($var<10);
        echo 'Estoy fuera del bucle'
    ?>
    
</body>
</html>