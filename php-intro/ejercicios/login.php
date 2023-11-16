<?php
    $usuario = $_POST['user'];
    $password= $_POST['password'];

    echo "$usuario <br>";
    echo "$password <br>";

    $listausuarios =array('pepe', 'ana', 'juan');
    $listapasword =array('123', '456', '789');
foreach($listausuarios as $userarray)
    {
        if($userarray == $usuario){
            echo "Existe <br>";
        }
        else {
            echo "No existe <br>";
        }
    }


    echo "<h2>array_search</h2>";

    $key=array_search($usuario, $listausuarios);
    echo "key";
    echo"$listausuarios[$key]";

    echo "<h2>In_array</h2>";
    $exite = in_array($usuario, $listausuarios);
    var_dump($exite);
    echo "<br>$exite<br>";

    if($exite == 1){
        echo "Usuario permitido";
    }
    else{
        echo "Usuario no permitido";
    }


?>