<?php
    require_once ('../conexion_a_clientes.php');
    $email = $_POST['email'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = $_POST['password'];
    $consulta = "INSERT INTO clientes (email, nombre_usuario, fecha_nacimiento, password) VALUES ('$email', '$nombre_usuario', '$fecha_nacimiento', '$password')";
    $resultado = mysqli_query($conexion, $consulta);
    if($resultado){
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
?>