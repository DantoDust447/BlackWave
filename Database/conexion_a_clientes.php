<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra ="";
    $baseDatos="clientes_BlackWave";

    $conexion = mysqli_connect($servidor, $usuario, $contra, $baseDatos);
    if(!$conexion){
        echo "problemas en conexión";
    }

?>