<?php 
include ('../conexion/conexion.php');
$id = $_POST['id'];

$consulta = "DELETE FROM invitados WHERE id = '$id'";
$query = mysqli_query($conexion, $consulta);
if ($query) {
    echo "<script>
    alert('Registro eliminado');
    window.location.href='../../index.php';
    </script>";
   # header('location: ../../index');
} else {
    echo "<script>
    alert('Error al eliminar');
    </script>";
    header('location: ../../index');
}
?>