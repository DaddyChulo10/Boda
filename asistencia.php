<?php
include('admin/php/conexion/conexion.php');
if (isset($_GET['id'])) {


    $codigo = $_GET['id'];
    $query = "SELECT COUNT(*) AS contar FROM invitados WHERE codigo = '$codigo'";
    $consulta = mysqli_query($conexion, $query);
    $array = mysqli_fetch_array($consulta);
    if ($array['contar'] <= 0) {
        header('Location: index');
    } else {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Leector</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="js/qr.js"></script>
        </head>

        <body>
            <div class="container">
                <?php

                $sql = "SELECT COUNT(*) AS contarAsis FROM invitados WHERE estatus = 'Invitado' AND codigo = '$codigo'";
                //echo $sql;
                $consulta1 = mysqli_query($conexion, $sql);
                $array1 = mysqli_fetch_array($consulta1);
                if ($array1['contarAsis'] == 1) {
                ?>
                    <br><br><br>
                    <div class="shadow p-3 mb-5 bg-white rounded text-center">
                        <center>
                            <h1><?php echo 'Confirmar la entrada' ?></h1>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <?php
                                    $sql = "SELECT * FROM invitados WHERE codigo = '$codigo'";
                                    $consulta = mysqli_query($conexion, $sql);
                                    $array = mysqli_fetch_array($consulta);
                                    ?>
                                    <h5 class="card-title">FAMILIA: <?php echo $array['1'] ?> </h5>
                                    <p>Integrantes: <?php echo $array['3'] ?> </p>
                                    <p>Niños: <?php echo $array['4'] ?> </p>
                                    <form action="admin/php/invitados/confirmado.php" method="post">
                                        <input type="hidden" name="codigo" value="<?php echo $array['6'] ?>">
                                        <input type="submit" name="Confirmar" value="Confirmar" class="btn btn-success">
                                    </form>
                                    <?php

                                    ?>
                                </div>
                            </div>
                        </center>
                    </div>
                <?php
                } else {
                ?>
                    <br>
                    <br>
                    <br>

                    <div class="shadow p-3 mb-5 bg-white rounded text-center">
                        <center>
                            <h1><?php echo 'Esta familia ya entro' ?></h1>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <?php
                                    $sql = "SELECT * FROM invitados WHERE codigo = '$codigo'";
                                    $consulta = mysqli_query($conexion, $sql);
                                    $array = mysqli_fetch_array($consulta);
                                    #America/Mexico_City	
                                    ?>
                                    <h5 class="card-title">La FAMILIA: <?php echo $array['1'] ?> ya ha ingresado</h5>
                                    <p>Fecha: <?php echo $array['8'] ?> </p>
                                    <p>Hora: <?php echo $array['9'] ?> </p>
                                </div>
                            </div>
                        </center>
                    </div>
                <?php
                }
                ?>
            </div>
        </body>

        </html>
<?php
    }
} else {
    header('Location: index');
}
?>