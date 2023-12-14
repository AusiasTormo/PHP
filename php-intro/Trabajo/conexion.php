<?php

$link = 'mysql:host=localhost; dbname=trabajo';
$usuario = 'web';
$pass = 'Campus123';

try{
$pdo = new PDO($link, $usuario, $pass);
//echo 'conectado';
// echo 'Última conexión: ';
// print date("d/m/Y G:i:s", time());
} catch(PDEException $e){
    print "Error; " . $e->getMessage(). '<br>';
    die();
}

?>