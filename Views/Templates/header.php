<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel Administrativo</title>
    <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet" />
    <script src="<?php echo base_url; ?>Assets/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar" style="background: black; justify-content: center; padding: 5px;">
        <nav class="navbar navbar-expand bg-dark" style="border-radius: 8px; justify-content: center; height: 4%; width: 99%; padding: 20px;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-success" href="<?php echo base_url; ?>Inicio">E'CONS PERÚ S.A.C</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-tie"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background: black;">
                <div id="layoutSidenav_nav" style="justify-content: center; height: 100%; width: auto;  padding-top: 70px; padding-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 25); border-radius: 18px;" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon text-warning"><i class="fas fa fa-columns"></i></div>
                                    Configuración
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url; ?>Usuarios"><div class="sb-nav-link-icon"><i class="fas fa-user text-primary"></i></div> Usuarios</a>
                                        <a class="nav-link" href="layout-sidenav-light.html"><div class="sb-nav-link-icon"><i class="fas fa-user-tie text-primary"></i></div> Roles</a>
                                    </nav>
                                </div>
                            </div>
                            <div class="nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-hard-hat"></i></div>
                                    Materiales
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url; ?>MatePisos">
                                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group text-primary"></i></div>Pisos
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>MateParedes">
                                            <div class="sb-nav-link-icon"><i class="fas fa-border-all text-primary"></i></div>Pared
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>MateTechos">
                                            <div class="sb-nav-link-icon"><i class="fas fa-home text-primary"></i></div>Techo
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>Medida"><div class="sb-nav-link-icon"><i class="fas fa-hard-hat text-primary"></i></div> Medidas</a>

                                    </nav>
                                </div>
                            </div>
                            <div class="nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                    Presupuesto
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url; ?>PresupuestoPisos">
                                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group text-primary"></i></div>Calcular Presupuesto Pisos
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>PresupuestoPared">
                                            <div class="sb-nav-link-icon"><i class="fas fa-border-all text-primary"></i></div>Calcular Presupuesto Pared
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>PresupuestoTecho">
                                        <div class="sb-nav-link-icon"><i class="fas fa-home text-primary"></i></div>Calcular Presupuesto Techo
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <div class="nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                                    Historial
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url; ?>HistorialPisos">
                                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group text-primary"></i></div>Historial Presupuesto Pisos
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>HistorialParedes">
                                            <div class="sb-nav-link-icon"><i class="fas fa-border-all text-primary"></i></div>Historial Presupuesto Pared
                                        </a>
                                        <a class="nav-link" href="<?php echo base_url; ?>HistorialTechos">
                                            <div class="sb-nav-link-icon"><i class="fas fa-home text-primary"></i></div>Historial Presupuesto Techo
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <div class="nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                                    Presupuesto General
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?php echo base_url; ?>General">
                                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group text-primary"></i></div>Presupuesto General
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-2"> 