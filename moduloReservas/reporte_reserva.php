<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reporte/Reservas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">

        <!--Header de web-->
        <?php include("../includes/header.php")?>
        
        <!--ABAJO-->
        <div id="layoutSidenav">

            <!--SIDEBAR-->
            <?php include("../includes/sidebar.php")?>

            <!--Dentro de la pagina-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4"> <!--Contendor para abarque todo-->
                        
                        <!-- CABEZA DEL CONTENIDO MAIN --> 
                        <h1 class="mt-4">Reportes Ventas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Ventas</a></li>
                            <li class="breadcrumb-item active">Reportes Reserva</li>
                        </ol>
                        <hr>
                        <!-- CENTRO EN LATERALES -->
                        <div class="row g-3">
                            <!-- Lateral derecha-->
                            <div class="col-md-5 col-lg-4 order-md-last">
                                <h4 class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted">ESTADOS DE MESAS</span>
                                    <span class="badge bg-secondary rounded-pill">17</span>
                                </h4>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Libre
                                        <span class="badge bg-primary rounded-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ocupado
                                        <span class="badge bg-primary rounded-pill">3</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Lateral IZQUIERDA-->
                            <div class="col-md-7 col-lg-8">
                                <div class="card mb-2">
                                    <form method="post" action="grabarReserva"class="needs-validation" novalidate="">
                                        <div class="card-body text-center">
                                            <label label for="state" class="form-label lead">BUSQUEDA POR FECHA</label>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="state" class="col-form-label">De:</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="date" class="form-control" name="txtfecha">
                                                </div>
                                                <div class="col-auto">
                                                    <label for="state" class="col-form-label"> a </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="date" class="form-control" name="txtfecha">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="w-90 btn btn-primary" type="submit">Filtrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="my-2">
                        <!-- TABLA DE BOLETAS-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                LISTA BOLETAS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Cliente</th>
                                            <th>N. Personas</th>
                                            <th>Celular</th>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Cliente</th>
                                            <th>N. Personas</th>
                                            <th>Celular</th>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--ACCIONES POPSTERIORES -->
                        <div class="card mb-2">
                                        <div class="card-body text-center">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="state" class="col-form-label">Acciones de Reporte:</label>
                                                </div>
                                                <div class="col-auto">
                                                    <button class="w-90 btn btn-primary" type="submit">Reporte Total</button>
                                                </div>
                                                <div class="col-auto">
                                                    <button class="w-90 btn btn-primary" type="submit">Reporte Por fechas</button>
                                                </div>
                                                <div class="col-auto">
                                                    <button class="w-90 btn btn-primary" type="submit">Reporte Por x</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        <div style="height: 10vh"></div>
                        <div class="card mb-4"><div class="card-body"> CAMBIAR ESTA WEVADA, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    
                    </div>
                </main>
                
                <!-- FOTTER -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

</html>

