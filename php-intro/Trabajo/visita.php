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
    <div class="row justify-content-center">
        <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Número PC</th>
                            <th scope="col">Dirección IP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultado as $dato): ?>
                            <tr>
                                <td><?php echo $dato['first_name']; ?></td>
                                <td><?php echo $dato['last_name']; ?></td>
                                <td><?php echo $dato['email']; ?></td>
                                <td><?php echo $dato['pc_number']; ?></td>
                                <td><?php echo $dato['ip_address']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

    
<?php
include 'footer.php';
?>