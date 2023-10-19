<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
<?php
    $rol = 'Administrador';
    if ($rol == 'Administrador'){
        echo '<h3 style="color:green">Puede modificar datos</h3>';
        echo '<br>';
        echo '<a href="data.php">DATOS</a>';
    }
    else{
        echo '<h3 style="color:red">Solo puede visualizar los datos</h3>';
        echo '<a href="data.php">DATOS</a>';
    }
?>
</body>
</html>