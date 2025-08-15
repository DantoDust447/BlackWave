<?php
require_once '../conexion_a_clientes.php';
// Aquí puedes agregar el código para manejar la vista de clientes
// Por ejemplo, podrías realizar una consulta para obtener los datos de los clientes
$query = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $query);
if (!$result) {
    echo "Error en la consulta: " . mysqli_error($conexion);
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        // Aquí puedes procesar cada fila de resultados
        echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . "<br>";
    }
}
?>