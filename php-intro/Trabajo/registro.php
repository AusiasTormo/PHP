<?php
include 'header.php';
?>

<?php
include_once "conexion.php";
 
//Agregar registros a la tabla
 
 if($_POST){
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$email=$_POST['email'];
$numeropc=$_POST['numeropc'];
$ip=$_POST['ip'];


$sql_insert='INSERT INTO users (first_name,last_name,email,pc_number,ip_address) VALUES (?,?,?,?,?)';
$sentence_insert = $pdo->prepare($sql_insert);
$sentence_insert->execute(array($nom,$ape,$email,$numeropc,$ip));
 
header('location:visita.php');
 }
 
?>

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
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">Número de PC</label>
    <input type="text" class="form-control" name="numeropc">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"
    class="form-label">Dirección IP</label>
    <input type="text" class="form-control" name="ip">
  </div>
 
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

<?php
include 'footer.php';
?>