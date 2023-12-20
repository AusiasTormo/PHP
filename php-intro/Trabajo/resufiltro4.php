<?php
include 'header.php';
?>
<?php
include_once "conexion.php";
if($_POST){
  $ip=$_POST['ip'];
  
  $sql = "SELECT first_name, last_name, email, pc_number, ip_address FROM users WHERE ip_address like '$ip%'";
  
  $gsent= $pdo -> prepare ($sql);
  $gsent-> execute();
  
  $resultado = $gsent -> fetchAll();

}
else {
  $sql_read = 'SELECT * FROM users';
 
$gsent= $pdo -> prepare ($sql_read);
$gsent-> execute();
 
 
$resultado = $gsent -> fetchAll();
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($resultado as $dato): ?>
                    <li class="list-group-item list-group-item-info">
                        <span class="text-muted">Nombre:</span> <?php echo $dato['first_name']; ?><br>
                        <span class="text-muted">Apellido:</span> <?php echo $dato['last_name']; ?><br>
                        <span class="text-muted">Email:</span> <?php echo $dato['email']; ?><br>
                        <span class="text-muted">PC Number:</span> <?php echo $dato['pc_number']; ?><br>
                        <span class="text-muted">IP Address:</span> <?php echo $dato['ip_address']; ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>