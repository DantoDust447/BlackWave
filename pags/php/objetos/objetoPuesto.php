<?php
    require_once '../clases/puestos.php';
    $objetoPuesto = new Puestos();
    $objetoPuesto->puestoId =$_POST["puesto_id"]; // Asignar un ID de ejemplo
    $objetoPuesto->puestoNombre =$_POST["puesto_nombre"]; // Asignar un nombre de ejemplo
    $objetoPuesto->verDatos(); // Llamar al método para mostrar los datos del puesto
?>