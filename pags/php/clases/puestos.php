<?php
    class Puestos{
        //atributos
        public $puestoId;
        public $puestoNombre;
        //metodos
        public function verDatos(){
            echo "Datos puesto";
            echo "<br>Puesto ID: " . $this->puestoId;
            echo "<br>Puesto Nombre: " . $this->puestoNombre;
        }
    }



?>