<?php
include 'header.php';
?>
<?php
 
include_once 'conexion.php';
 
$sql_read = 'SELECT email, pc_number, ip_address FROM users where first_name like "Lynett" and last_name like "Bodell"';
 
$gsent= $pdo -> prepare ($sql_read);
$gsent-> execute();
 
 
$resultado = $gsent -> fetchAll();
 
// var_dump ($resultado);

?>
<h1 class="row justify-content-center" >DATOS Lynett Bodell</h1>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($resultado as $dato): ?>
                    <li class="list-group-item list-group-item-info">
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