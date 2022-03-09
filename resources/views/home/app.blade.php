<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('home/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('home/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('template/dist/assets/vendors/toastify/toastify.css')}}">
  <link href="{{asset('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('home/assets/css/style.css')}}" rel="stylesheet">
<!--   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .chats {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 20px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 3px 4px 3px #999;
    left: 15px;
    z-index: 100;
  }

  .my-float {
    margin-top: 10px;
  }
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">PERPUS BOOK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#primary" href="#">Search</a></li>
          <li> 
            @if(Auth::user())
            <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{route('profil_buyer')}}">{{Auth::user()->name}}</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
              </ul>
            </li>
            @else
            <a class="getstarted scrollto" href="{{route('login')}}">Sign-In</a></li>
            @endif
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
    @yield('content')
    <footer id="footer">
      <div class="container">
        <h3>PERPUS BOOK</h3>
      </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div class="modal fade text-left" id="primary" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel160"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="myModalLabel160">
          Search Produk
        </h5>
      </div>
      <form method="get" action="{{route('search')}}">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="keyword">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button"
          class="btn btn-light-secondary"
          data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Tutup</span>
        </button>
        <button class="btn btn-primary ml-1">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Cari</span>
        </button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Vendor JS Files -->
<script src="{{asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('home/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('template/dist/assets/vendors/toastify/toastify.js')}}"></script>
<script src="{{asset('template/dist/assets/js/extensions/toastify.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('home/assets/js/main.js')}}"></script>

</body>
@include('layout/notif')
</html>