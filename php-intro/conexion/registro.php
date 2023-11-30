<?php
include_once "conexion.php";
 
//Agregar registros a la tabla
 
 if($_POST){
$user=$_POST['nombre'];
 
$sql_insert='INSERT INTO usuarios (nombre) VALUES (?)';
$sentence_insert = $pdo->prepare($sql_insert);
$sentence_insert->execute(array($user));
 
header('location:usuarios.php');
 }
 
?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <form method="POST" action="registro.php">
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
 
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
 
</body>
</html>