<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Crear factura</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link type="text/css" href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyPortfolio
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Echoes of Vinyl</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Cuenta</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Opciones</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                <span>Iniciar sesión</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile">
                                <i class="bi bi-person"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Salir</span>
                                </a>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bi bi-grid"></i>
                    <span>Inicio</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile">
                    <i class="bi bi-person"></i>
                    <span>Mi perfil</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('disco.index')}}">
                    <i class="bi bi-card-list"></i>
                    <span>Discos</span>
                </a>
            </li><!-- End Discos Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('artista.index')}}">
                    <i class="bi bi-card-list"></i>
                    <span>Artistas</span>
                </a>
            </li><!-- End Artistas Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-card-list"></i>
                    <span>Clientes</span>
                </a>
            </li><!-- End Clientes Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('factura.index')}}">
                    <i class="bi bi-card-list"></i>
                    <span>Facturas</span>
                </a>
            </li><!-- End Facturas Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-file-earmark"></i>
                    <span>Mis facturas</span>
                </a>
            </li><!-- End mis facturas Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Crear factura</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datos</h5>

                            <!-- General Form Elements -->
                            <form form action="{{route('factura.store')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="user_id" class="col-sm-2 col-form-label">ID usuario</label>
                                    <div class="col-sm-10">
                                        <input name="user_id" type="text" class="form-control"">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="disco_id" class="col-sm-2 col-form-label">ID disco</label>
                                    <div class="col-sm-10">
                                        <input name="disco_id" type="text" class="form-control"">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                            <p></p>
                            <a href="{{route('factura.index')}}">Cancelar</a>

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <br>
    <form action="{{route('factura.index')}}">
        <input type="submit" value="Regresar" />
    </form>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Echoes Of Vinyl</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>