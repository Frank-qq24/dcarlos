<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Generar Comanda - DCarlos</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!--Header de web-->
        <?php include("includes/header.php")?>
        
        <!---------------------------- CONTENIDO -------------------------------->
        <div id="layoutSidenav">

            <!--SIDEBAR-->
            <?php include("includes/sidebar.php")?>

            <!--Dentro de la pagina-->
            <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Emitir Comanda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
                            <li class="breadcrumb-item active">Emitir Boleta</li>
                        </ol>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="text-center">
                                    <h2>Reserva de Mesa</h2>
                                    <p class="lead">Una buena atencion al cliente, al cual lo esperamos con anticipacion</p>
                                </div>
                            </div>
                        </div>

                        <div class="contenedornosprincp">
                            <div class="contenedornos">
                            <table class="table table-striped" id="cart-container">
                                <thead >
                                    <th>ÍTEM</th>
                                    <th>PLATO</th>
                                    <th>PRECIO</th>
                                    <th>CANTIDAD</th>
                                    <th>SUB TOTAL</th>
                                </thead>
                                
                                <tbody>
                                
                                <tr class="table-active">
                                    <td><input type="text" disabled value="<%=carta.getIdcarta()%>"></td>
                                    <td><input type="text" disabled  value="<%=carta.getNom_carta()%>"></td>
                                    <td><input type="text" disabled value="<%=carta.getPrecio()%>"></td>
                                    <td><input type="text" disabled  value="<%=a.getCantidad()%>"></td>
                                    <td><input type="number" disabled  value="<%=Math.round(carta.getPrecio()*a.getCantidad()*100.0/100.0)%>"></td>
                                    <td>
                                        <span id="idcarta" style="display: none;"><%=carta.getIdcarta()%></span>
                                        <a href="" id="deleteitem" class="btn btn-warning">X</a></td>
                                </tr>
 
                                </tbody>
                            </table>
                                <span>No hay productos en la Compra</span>
                                <table>
                                    <tr>
                                        <td>Costo Subtotal S/.</td>
                                        <td><input type="number" class="form-control" disabled id="txt-subtotal" value="<%=Math.round((total-(total*(18.0/100.0)))*100.0/100.0)%>"></td>
                                    </tr>
                                    <tr>
                                        <td>Impuestos S/.</td>
                                        <td><input type="number" class="form-control" disabled value="<%=Math.round(total*(18.0/100.0))%>"></td>
                                    </tr>
                                    <tr>
                                        <td>Total S/.</td>
                                        <td><input type="number" class="form-control" disabled  id="txt-total" value="<%=Math.round(total*100.0/100.0)%>"></td>
                                    </tr>
                                    </table>
                                    <br>
                                    <a href="javascript:window.history.go(-2)" class="btn custom-btn">Seguir Comprando</a>
                                    <a href="ReporteExcel.jsp" class="btn custom-btn">PROCESAR</a>
                            </div>
                        </div>

                        <div style="height: 10vh"></div>
                        <div class="card mb-4"><div class="card-body">CAMBIAR ESTA WEVADA, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>

                <!--pie de main-->
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
        <script src="js/scripts.js"></script>
    </body>
</html>
