<!DOCTYPE html>
<html lang="pt-ao">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center px-4">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/favicon.png" alt=""> -->
        <h1 style="color: #dc3545;">PBCC</h1>
        <!-- <span>.</span> -->
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li class="dropdown has-dropdown">
            <a href="#">
              <span>Movimentar</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dd-box-shadow">
              <li class="w-100">
                <div class="d-flex">
                  <a href="">Levantar Dinheiro</a>
                  <a href="">Depositar Dinheiro</a>
                  <a href="">Transferir Dinheiro</a>
                  <a href="">Verificar Dinheiro</a>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown has-dropdown">
            <a href="#">
              <span>Investir</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dd-box-shadow">
              <li class="w-100">
                <div class="d-flex">
                  <a href="">Em sua vida</a>
                  <a href="">Medicamentos</a>
                  <a href="">Desportos</a>
                  <a href="">Informática</a>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown has-dropdown">
            <a href="#">
              <span>Pagar</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dd-box-shadow">
              <li class="w-100">
                <div class="d-flex">
                  <a href="">Alguma coisa</a>
                  <a href="">Compras</a>
                  <a href="">Serviço</a>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="index.html">Sobre</a></li>
          <!-- <li><a href="index.html#services">Serviços</a></li> -->
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <div class="btn-getstarted" >
        <div class="contentRight d-flex gap-2">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn border-2 px-4 py-1 border-light-subtle rounded-2 btn-delivery">Entregas</button>

          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
            
          <div class="nav-item dropdown" style="width: 40px;height: 40px; padding: 2px 11px; font-size: 20px;">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi-person-lines-fill"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cadastra-se</a></li>
                <li><a class="dropdown-item" href="#">Entrar</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Cadastra a sua empresa</a></li>
              </ul>
          </div>
              
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <main class="main">
    @yield('content')
  </main>

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Agente Bancário</span>
          </a>
          <p>Agente Bancário, uma empresa dedicada à excelência no campo da educação e tecnologia.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Links Frequentes</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Termos de serviço</a></li>
            <li><a href="#">Política de privacidade</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Nossos Serviços</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contacto</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Telefone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Agente Bancário</strong> <span>Todos Direitos Reservados</span></p>
    </div>

  </footer><!-- End Footer -->

  <!-- Map  -->
  <a href="https://www.appsheet.com/start/7e0d033e-b557-4962-963c-645680caf633" target="_blank" class="map-top d-flex align-items-center justify-content-center gap-3 px-4 py-2">
    <div class="d-grid text-center"> 
      <span>Usar Mapa</span>
      <span style="font-size: 10px;font-weight: normal;">BETA</span>
    </div>
    <i class="bi bi-geo-alt-fill"></i>
  </a>

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>