<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
$rol = 'Administrador';
    switch($rol){
        case 'Administrador';
            echo '<h3 style="color:green">Tienes permiso para modificar los datos</h3>';
            echo '<br>';
            echo '<a href="data.php">DATOS</a>';
            break;
        case 'Usuario';
            echo '<h3 style="color:yellow">Solo tienes permiso para visualizar los datos</h3>';
            echo '<br>';
            echo '<a href="data.php">DATOS</a>';
            break;
        default;
            echo '<h3 style="color:red">NO TIENES PERMISO PARA ENTRAR</h3>';
            break;
    }
?>
</body>
</html>