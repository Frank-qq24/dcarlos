            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Principal
                            </a>
                            <!--AREA DE VENTAS-->
                            <div class="sb-sidenav-menu-heading">Ventas</div>

                                <!--HACER COMANDAS-->
                                <a class="nav-link" href="#">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Comanda
                                </a>

                                <!--BOLETA-->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Boleta
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="../modeloVentas/emitir_boleta.php">Emetir Boleta</a>
                                        <a class="nav-link" href="../modeloVentas/reporte_boleta.php">Reporte Boleta</a>
                                    </nav>
                                </div>

                                <!--RESERVA-->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#c_reserva" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Reserva
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="c_reserva" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="../moduloReservas/emitir_reserva.php">Emetir Reserva</a>
                                        <a class="nav-link" href="../moduloReservas/reporte_reserva.php">Reporte Reserva</a>
                                    </nav>
                                </div>
                            
                            <!--AREA DE CONFIGURACION-->
                            <div class="sb-sidenav-menu-heading">Mantenimiento</div>
                            <!--Opciones de CRUD insumos-->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Insumos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Productos</a>
                                    <a class="nav-link" href="#">Categorias</a>
                                </nav>
                            </div>
                            <!--Configuracion de usuario-->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#c_autenticar" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Control de usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="c_autenticar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Lista Usuarios</a>
                                    <a class="nav-link" href="password.php">Cambiar contraseña</a>
                                    <a class="nav-link" href="register.php">Registrar</a>
                                </nav>
                            </div>
                            <!--Configuracion de Usuario-->
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Perfil
                            </a>
                            <!--AREA DE REPORTES-->
                            <div class="sb-sidenav-menu-heading">REPORTE</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Documentos
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connectado como:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>