
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>{{ $title ?? 'Nurul Falah' }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('/front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('/front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/front/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('/front/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  @livewireStyles
</head>


<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">

        <!-- <a href="#hero"><img src="{{asset('/front/img/logo.png')}}" alt="" title="" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">Nurul Falah</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#kegiatan">Kegiatan</a></li>
          <li><a href="#pengurus">Pengurus</a></li>
          <li><a href="#petugas">Petugas Shalat Juma'at</a></li>
          <li><a href="#laporan">Laporan Keuangan</a></li>
          <li><a href="#contact">Kontak</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  {{ $slot }}

  <!--==========================
    Hero Section
  ============================-->


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Masjid Nurul Falah</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="">Aldy Prayogo</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('/front/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/front/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('/front/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/front/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('/front/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('/front/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('/front/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/front/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('/front/lib/superfish/superfish.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('/front/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('/front/js/main.js')}}"></script>

  @livewireScripts
</body>
</html>
