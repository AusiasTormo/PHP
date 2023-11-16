<?php
$usuario = $_POST['user'];
$password= $_POST['password'];

$listausers=array('pedro'=>123, 'juan'=>456, 'ana'=>789);

$existe=array_key_exists($usuario, $listausers);

if($existe == 1){
        echo "Usuario Ya creado";
    }
else{
    $listausers[$usuario] = $password;
    echo "Usuario creado<br><br>";
    print_r($listausers);
}
?>