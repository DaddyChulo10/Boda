<?php
include('admin/php/conexion/conexion.php');
$query1 = "SELECT COUNT(*) AS contar FROM invitados WHERE codigo = '$_GET[id]' ";
$consulta1 = mysqli_query($conexion, $query1);
$array = mysqli_fetch_array($consulta1);
if ($array['contar'] <= 0) {
    header('Location: index');
} else {
?>
    <!DOCTYPE html>
    <html class="no-js">

    <head>
        <link rel="icon" href="img/anillos.png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Invitación</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Me" />
        <meta name="keywords" content="Me" />
        <meta name="author" content="Me" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fondo.css">
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/qr.js"></script>


    </head>

    <body ontouchstart>


        <div class="fh5co-loader"></div>



        <!--BLANCO2-->
        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading conten text-center animate-box">
                        <img src="img/rosa3-1-PhotoRoom.png" width="95%" height="95%">
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Tu invitación</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <?php
                        $consulta = "SELECT * FROM invitados WHERE codigo='$_GET[id]'";
                        $resultado = mysqli_query($conexion, $consulta);
                        foreach ($resultado as $row) {
                        ?>
                            <?php
                            if ($row['foa'] == 'familia') {
                            ?>
                                <h3 style="color:black">Familia: <?php echo $row['familia'] ?> </h3>
                            <?php
                            } else {
                            ?>
                                <h3 style="color:black"><?php echo $row['familia'] ?> </h3>
                            <?php
                            }
                            ?>

                            <?php if ($row['novios'] == 'Por Ivone') { ?>
                                <img src="img/vestido.png">
                            <?php } else { ?>
                                <img src="img/traje.png">

                            <?php } ?>
                            <br>
                            <h3 style="color:black">Adultos: <?php echo $row['invitados'] ?> </h3>
                            <br>
                            <?php
                            if ($row['niños'] == 0) {
                            } else {
                            ?>
                                <h3 style="color:black">Niños: <?php echo $row['niños'] ?> </h3>
                            <?php
                            }
                            ?>

                            <br>
                            <img alt="Código QR" id="codigo">
                            <br>
                            <script>
                                new QRious({
                                    element: document.querySelector("#codigo"),
                                    value: "https://nuestrabodaivoneyjavier.000webhostapp.com/asistencia.php?id=<?php echo $row['codigo'] ?>",
                                    size: 300,
                                    backgroundAlpha: 0,
                                    foreground: "#000000",
                                    level: "H",
                                });
                            </script>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading conten text-center animate-box">
                    <img src="img/rosa4-1-PhotoRoom.png" width="95%" height="95%">
                </div>
                <br><br><br><br><br>
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading conten text-center animate-box">
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>

                </div>
            </div>
        </div>










        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/simplyCountdown.js"></script>
        <script src="js/main.js"></script>
        <script>
            simplyCountdown('.simply-countdown-one', {
                year: 2022,
                month: 4,
                day: 23,
                hours: 10,
                minutes: 0,
                seconds: 0,
                enableUtc: true,
                words: {
                    days: 'Día',
                    hours: 'Hora',
                    minutes: 'Minuto',
                    seconds: 'Segundo',
                    pluralLetter: 's'
                },
                plural: true,
            });
        </script>
    </body>

    </html>
<?php
}
?>
<!-- 

jefe Nombre completo apellidos
Invitados del novio y novia
no. de invitados (incluyendo el jefe)



-->