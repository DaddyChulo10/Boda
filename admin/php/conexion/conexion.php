<?php 
$conexion = new mysqli("localhost", "root", "", "id18459673_boda");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}


//mysqli_connect()
?>