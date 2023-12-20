<?php

$link = 'mysql:host=sql209.infinityfree.com; dbname=if0_35079883_asir2_ausias';
$usuario = 'if0_35079883';
$pass = 't3QIOid3crNDv';

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