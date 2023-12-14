
<footer>
            <p style="text-align=center">
            Creado por Ausias Tormo  <?php $fecha = getdate();
            echo "fecha:" . $fecha[ 'mday' ]. "/". $fecha[ 'mon' ]. "/". $fecha[ 'year' ];
            echo "<br>";?>
            
            </p>
            <?php

$link = 'mysql:host=localhost; dbname=trabajo';
$usuario = 'web';
$pass = 'Campus123';

try{
$pdo = new PDO($link, $usuario, $pass);
echo 'Conectado  ';
echo 'Última conexión: ';
print date("d/m/Y G:i:s", time());
} catch(PDEException $e){
    print "Error; " . $e->getMessage(). '<br>';
    die();
}

?>
    </footer>  
</body>
</html>