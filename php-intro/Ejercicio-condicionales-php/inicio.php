<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<?php
    $password = '123';
    if ($password == '123'){
        echo '<h3 style="color:green">Contraseña Correcta</h3>';
        echo '<br>';
        echo '<a href="resultado-login.php">LOGIN</a>';
    }
    else{
        echo '<h3 style="color:red">Contraseña Incorrecta</h3>';
    }
?>
</body>
</html>