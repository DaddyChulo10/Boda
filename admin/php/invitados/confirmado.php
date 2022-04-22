<?php
include_once '../conexion/conexion.php';

date_default_timezone_set('America/Mexico_City');

if (isset($_POST['Confirmar'])) {
    $codigo = $_POST['codigo'];
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');
    $sql = "UPDATE invitados SET estatus = 'Ya Ingreso', fecha = '$fecha', hora = '$hora'  WHERE codigo = '$codigo'";
    #echo $sql;
    #echo $sql;
    if (mysqli_query($conexion, $sql)) {
        echo '<script>
        alert("Registro actualizado");
        window.location.href="../../../index";
        </script>';
    } else {
        echo '<script>
        alert("Error al actualizar");
        window.location.href="../../../index";
        </script>';
    }
}
