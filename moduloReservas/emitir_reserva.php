<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Emetir Reserva - DCarlos</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!--Header de web-->
        <?php include("../includes/header.php")?>
        
        <!--CONTENIDO-->
        <div id="layoutSidenav">

            <!--SIDEBAR-->
            <?php include("../includes/sidebar.php")?>

            <!--Dentro de la pagina-->
            <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Emitir Reserva</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../shared/home.php">Principal</a></li>
                            <li class="breadcrumb-item active">Emitir Boleta</li>
                        </ol>
                        <hr>

                        
                        <!-- Lateral -->
                        <div class="row g-3">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Mesas disponibles</span>
                            <span class="badge bg-secondary rounded-pill">17</span>
                            </h4>
                            <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Mesa familiar</h6>
                                    <small class="text-muted">Disposion para 7 personas</small>
                                </div>
                                <span class="text-muted">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Mesa Personal </h6>
                                    <small class="text-muted">Disposion para 1 persona</small>
                                </div>
                                <span class="text-muted">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Mesa de Pareja</h6>
                                    <small class="text-muted">Disposion para 2 personas</small>
                                </div>
                                <span class="text-muted">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                <h6 class="my-0">Mesa de Amigos</h6>
                                <small class="text-muted">Disposion para 4 personas</small>
                                </div>
                                <span class="text-muted">7</span>
                            </li>
                            </ul>
                            
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#Reserva</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Hora</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-7 col-lg-8">
                            <hr class="my-4">
                                <div class="text-center">
                                    <p class="lead">Datos de reservacion</p>
                                </div>
                            <hr class="my-4">
                            
                            <form method="post" action="grabarReserva"class="needs-validation" novalidate="">
                                
                            <div class="row g-3">
                                <div class="col-sm-5">
                                    <label for="firstName" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                    <input type="hidden" name="txtusuario" value="2" >
                                </div>
                                
                                <div class="col-sm-7">
                                    <label for="lastName" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                </div>

                                <div class="col-sm-7">
                                    <label for="username" class="form-label">Correo Electronico</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" id="username" placeholder="Ejemplo@gilmail.com" required="">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <label for="lastName" class="form-label">Celular</label>
                                    <input type="number" class="form-control" id="celular" placeholder="" value="" required="">
                                </div>
                                
                                <div class="col-md-5">
                                    <label for="country" class="form-label">TIPO DE MESA</label>
                                    <select class="form-select" id="country" name="txtcantidad">
                                        <option>Seleccione ...</option>
                                        <option value="8">Familiar</option>
                                        <option value="4">Amigos</option>
                                        <option value="2">Pareja</option>
                                        <option value="1">Personal</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                <label for="state" class="form-label">FECHA</label>
                                <input type="date" class="form-control" name="txtfecha">
                                </div>

                                <div class="col-md-3">
                                <label for="zip" class="form-label">HORA</label>
                                <input type="time" class="form-control" name="txthora" placeholder="">
                                </div>
                            </div>
                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">RESERVAR</button>
                            </form>
                        </div>
                        </div>

                        <div style="height: 10vh"></div>
                        <div class="card mb-4"><div class="card-body"> CAMBIAR ESTA WEVADA, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <!--PARTE DE ABAJO-->
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
    </body>
</html>
