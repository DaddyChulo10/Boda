<?php
require_once '../conexion/conexion.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$query = "SELECT COUNT(*) AS contar FROM admin WHERE usuario = '$usuario' ";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);
if ($array['contar'] > 0) {
    $q2 = "SELECT * FROM admin WHERE usuario = '$usuario'";
    if ($consulta = mysqli_query($conexion, $q2)) {
        foreach ($consulta as $row) {  
            $hash = $row['contraseña'];
            if(password_verify($contraseña, $hash)){
                session_start();
                $_SESSION['USUARIO'] = $usuario;
                header('Location: ../../index');
            }else{
                echo '<script type="text/javascript">
                alert("Error 2 ");
                window.location.href="../../login";
                </script>';
            }
        }
    }else{
        echo '<script type="text/javascript">
        alert("Error: 123 ");
        window.location.href="../../login";
        </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("Error 1 ");
            window.location.href="../../login";
            </script>';
}


/*

 if (password_verify($contraseña, $hash)) {
                session_start();
                $_SESSION['NOMBRE'] = $nombre;
                $_SESSION['ID'] = $id;

                echo '<script type="text/javascript">    
                alert("Bienvenido ' . $nombre . '");      
                //window.location.href="../../admin/index";
                </script>';
            } else {
                echo '<script type="text/javascript">
                alert("Contraseña incorrecta ");
                //window.location.href="../../login";
            </script>';
            }

while ($fila = $consulta2->fetch_array(MYSQLI_BOTH)) {
            echo 'hola';
            $hash = $fila['contraseña'];
            $nombre = $fila['nombre'];
            if (password_verify($contraseña, $hash)) {
                session_start();
                $_SESSION['NOMBRE'] = $nombre;
                $_SESSION['ID'] = $id;

                echo '<script type="text/javascript">    
                alert("Bienvenido ' . $nombre . '");      
                //window.location.href="../../admin/index";
                </script>';
            } else {
                echo '<script type="text/javascript">
                alert("Contraseña incorrecta ");
                //window.location.href="../../login";
            </script>';
            }
        }
        */