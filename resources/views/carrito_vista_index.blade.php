<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mi carrito</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
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

    <!--
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">

      <ul class="d-flex align-items-center">
        <!-- Carrito -->
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="{{route('carrito.index')}}">
            <i class="bi bi-cart3">
              <span> Mi carrito</span>
            </i>
          </a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="{{route('login')}}">
            <i class="bi bi-cart3">
              <span> Mi carrito</span>
            </i>
          </a>
        </li>
        @endauth

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
              <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
                <i class="bi bi-person"></i>
                <span>Iniciar sesión</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              @auth
                <a class="dropdown-item d-flex align-items-center" href="users-profile">
                    <i class="bi bi-person"></i>
                    <span>Perfil</span>
                </a>
              @else
              <a class="dropdown-item d-flex align-items-center" href="{{route('login')}}">
                    <i class="bi bi-person"></i>
                    <span>Perfil</span>
              </a>
              @endauth
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                @auth
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Salir</span>
                  </a>
                </form>
                @else
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Salir</span>
                </a>
                @endauth
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
        @auth
        <a class="nav-link collapsed" href="users-profile">
          <i class="bi bi-person"></i>
          <span>Mi perfil</span>
        </a>
        @else
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="bi bi-person"></i>
          <span>Mi perfil</span>
        </a>
        @endauth
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        @auth
          <a class="nav-link collapsed" href="{{ route('disco.index') }}">
            <i class="bi bi-card-list"></i>
            <span>Discos</span>
          </a>
          @else
          <a class="nav-link collapsed" href="{{ route('login') }}">
            <i class="bi bi-card-list"></i>
            <span>Discos</span>
          </a>
        @endauth
      </li><!-- End Discos Page Nav -->

      <li class="nav-item">
        @auth
        <a class="nav-link collapsed" href="{{ route('artista.index') }}">
          <i class="bi bi-card-list"></i>
          <span>Artistas</span>
        </a>
        @else
        <a class="nav-link collapsed" href="{{ route('login') }}">
          <i class="bi bi-card-list"></i>
          <span>Artistas</span>
        </a>
        @endauth
      </li><!-- End Artistas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-card-list"></i>
          <span>Clientes</span>
        </a>
      </li><!-- End Clientes Page Nav -->

      <li class="nav-item">
        @auth
        <a class="nav-link collapsed" href="{{route('factura.index')}}">
          <i class="bi bi-card-list"></i>
          <!-- <i class="bi bi-cart3"></i> -->
          <span>Facturas</span>
        </a>
        @else
        <a class="nav-link collapsed" href="{{route('login')}}">
          <i class="bi bi-card-list"></i>
          <span>Facturas</span>
        </a>
        @endauth
      </li><!-- End Facturas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-earmark"></i>
          <span>Mis facturas</span>
        </a>
      </li><!-- End mis facturas Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mi carrito</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                @auth
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido {{Auth::user()->name}}</h5>
                    </div>
                @else
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido a Echoes of Vinyl</h5>
                    </div>
                @endauth

              </div>
            </div><!-- End Recent Sales -->

            @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif

            @if(session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                
                <div class="card-body pb-0">
                  <h5 class="card-title">Productos en carrito <span>| Hoy</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Carátula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($cantDiscos > 0)
                          @foreach($discosCarrito as $disco)
                          <tr>
                            <th scope="row"><a href="#"><img src="{{\Storage::url($disco->archivo_ubicacion)}}" class="foto-disco"alt=""></a></th>
                            <td><a class="text-primary fw-bold">{{ $disco->nombre }}</a></td>
                            <td><a class="fw-bold">{{ $disco->precio }}</a></td>
                            <td><a class="fw-bold">{{ $disco->pivot->cantidad }}</a></td>
                            <td>
                              <form action="{{ route('carrito.eliminar', ['disco' => $disco->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-pill">
                                  <i class="bi bi-trash"></i> Eliminar
                                </button>
                              </form>
                              
                            </td>
                          </tr>
                          @endforeach
                      @else
                          <p><h5>El carrito está vacío, aún no añades productos.</h5></p>
                      @endif
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        

      </div>
    </section>

  </main><!-- End #main -->

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