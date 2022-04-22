<?php 
include( '../conexion/conexion.php');

$familia = $_POST['familia'];
$novios = $_POST['novios'];
$integrantes = $_POST['integrantes'];
$niños = $_POST['niños'];
$codigo = (bin2hex(random_bytes(10)));
$foa = $_POST['foa'];

$consulta = "INSERT INTO invitados VALUES (NULL,'$foa','$familia', '$novios', '$integrantes','$niños','$codigo','Invitado','0000-00-00','Sin hora')";
$query = mysqli_query($conexion, $consulta);

if ($query) {
    header('location: ../../index');
} else {
    echo "<script>
    alert('Error al registrar');
    </script>";
    header('location: ../../index');
}