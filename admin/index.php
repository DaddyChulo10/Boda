<?php
session_start();
if (!isset($_SESSION['USUARIO'])) {
    //header('location: login');
    /*
    GMAIL
    ivoneyjavier@gmail.com
    miboda123
    
    000WEBHOST
    #s4GPODR&mli4H#FPylBP
    Miboda123.

    BD:
    name:boda
    user:me
    pass: Estoesunaboda1.

    */
    header('location: ../index.html');
} else {
    include('php/conexion/conexion.php')
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Control!</title>

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="js/validar.js"></script>

    </head>

    <body id="page-top">
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <ul class="navbar-nav ml-auto">
                            <a class="nav-link " href="php/login/cerrar.php">
                                Salir
                            </a>
                        </ul>
                    </nav>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Tabla de invitados</h1>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar Familiares
                        </button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#amigos">
                            Agregar Amigos
                        </button>
                        <a href="lista.php" target="_blank" class="btn btn-dark">Lista de invitados</a>
                        <br><br>

                        <!-- Modal -->
                        <div class="modal fade" id="amigos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Invitados</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="php/invitados/agregar.php" method="post">
                                        <input type="hidden" name="foa" value="amigos">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input name="familia" type="text" class="form-control form-control-user" placeholder="Nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Por parte de:</label>
                                                <select class="form-control" name="novios">
                                                    <option value="Por Ivone"> Por Ivone</option>
                                                    <option value="Por Javier"> Por Javier</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Adultos</label>
                                                <input name="integrantes" type="number" class="form-control form-control-user" placeholder="Integrantes" onkeypress="return solonumeros(event)" onpaste="return false" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Niños</label>
                                                <input name="niños" type="number" class="form-control form-control-user" placeholder="Integrantes" onkeypress="return solonumeros(event)" onpaste="return false" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Invitados</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="php/invitados/agregar.php" method="post">
                                        <input type="hidden" name="foa" value="familia">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nombre de la familia</label>
                                                <input name="familia" type="text" class="form-control form-control-user" placeholder="Nombre de la familia" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Por parte de:</label>
                                                <select class="form-control" name="novios">
                                                    <option value="Por Ivone"> Por Ivone</option>
                                                    <option value="Por Javier"> Por Javier</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Adultos</label>
                                                <input name="integrantes" type="number" class="form-control form-control-user" placeholder="Integrantes" onkeypress="return solonumeros(event)" onpaste="return false" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Niños</label>
                                                <input name="niños" type="number" class="form-control form-control-user" placeholder="Integrantes" onkeypress="return solonumeros(event)" onpaste="return false" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Invitados</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Familia</th>
                                                <th>Por parte de</th>
                                                <th>Adultos</th>
                                                <th>Niños</th>
                                                <th>Estatus</th>
                                                <th>Hora</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Familia</th>
                                                <th>Por parte de</th>
                                                <th>Adultos</th>
                                                <th>Niños</th>
                                                <th>Estatus</th>
                                                <th>Hora</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php
                                            $consulta = "SELECT * FROM invitados ORDER BY id ASC";
                                            $query = mysqli_query($conexion, $consulta);
                                            foreach ($query as $row) {
                                            ?>
                                                <tr>
                                                    <th><?php echo $row['familia'] ?></th>
                                                    <th><?php echo $row['novios'] ?></th>
                                                    <th><?php echo $row['invitados'] ?></th>
                                                    <th><?php echo $row['niños'] ?></th>


                                                    <?php if ($row['estatus'] == 'Ya Ingreso') {
                                                    ?>
                                                        <th style="color:green"><?php echo $row['estatus'] ?></th>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <th style="color:red"><?php echo $row['estatus'] ?></th>
                                                    <?php
                                                    } ?>
                                                    <th><?php echo $row['hora'] ?></th>
                                                    <th>
                                                        <form action="php/invitados/eliminar.php" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                            <button class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                        <button class="btn btn-primary" onclick="copy('<?php echo $row['codigo']; ?>')">Copiar</button>
                                                    </th>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                    </div>
                </footer>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <script>
            function solonumeros() {
                if ((event.keyCode < 48) || (event.keyCode > 57))
                    event.returnValue = false;

            }

            function copy(id) {
                var content = 'https://nuestrabodaivoneyjavier.000webhostapp.com/invitacion.php?id=' + id;
                //var content = familia + ' ' + integrantes + ' ' + codigo;
                navigator.clipboard.writeText(content)
                    .then(() => {
                        console.log("Texto copiado");
                        alert('Copiado');

                    })
                    .catch(err => {
                        console.log('Error.... al copiar', err);
                    });
            }
        </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/sb-admin-2.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="js/demo/datatables-demo.js"></script>
    </body>

    </html>
<?php
}
?>