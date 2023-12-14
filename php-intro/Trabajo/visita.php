<?php
include 'header.php';
?>
<?php
 
include_once 'conexion.php';
 
$sql_read = 'SELECT * FROM users';
 
$gsent= $pdo -> prepare ($sql_read);
$gsent-> execute();
 
 
$resultado = $gsent -> fetchAll();
 
// var_dump ($resultado);

?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php
                foreach ($resultado as $dato):
                ?>
                    <div class="alert alert-primary text-uppercase" role="alert">
                        <?php echo $dato['first_name'] . ' ' . $dato['last_name'];?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    
<?php
include 'footer.php';
?>