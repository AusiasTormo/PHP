<?php
$usuario = $_POST['user'];
$password= $_POST['password'];

$listausers=array('pedro'=>123, 'juan'=>456, 'ana'=>789);

$existe=array_key_exists($usuario, $listausers);

    if($existe == 1){
        $key=$listausers[$usuario];
        if($key == $password){
            echo "Usuario permitido";
             
        }
        else{
            echo "Usuario no permitido";
        }
    }
    else{
        echo "Usuario no permitido";
    }




?>