<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{config("app.name")}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="../img/icon.png" rel="icon">
  <link href="../img/icon.png" rel="apple-touch-icon">

  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/vendor/bootstrap/icofont/iconfont.min.css">

  <link href="../assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="/css/style.css">

</head>

<body class="bg-dark">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  bg-dark">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        
        {{--  <span class="navbar-brand mb-0 h1 text-white"><span class="custom-text-blue">NEXTGENERATIONS</span>  Malawi</span>  --}}
         <a href="index.html"><img src="../img/icon.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#services">Offers</a></li>
          <li class="drop-down"><a href="">Resources</a>
            <ul>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Projects</a></li>
            </ul>
          </li>
          <li><a href="#contact">About us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter bg-dark" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4 class="text-white">Join Our Newsletter</h4>
            <p class="text-white">Get latest news and updates on offeres, our latest projects and collaborations</p>
            <form action="/subscribe-newsletter" method="post">
              @csrf
              <input type="email" class="subscribe-form" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
          @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            You have successfully subscribed to our Newsletter...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          
        </div>
      </div>
    </div>

    <div class="footer-top bg-dark">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-white">NEXTGENERATIONS</h3>
            <p class="text-white">
              Kalimbuka <br>
              10th Avenue, Zomba<br>
              Malawi <br><br>
              <strong>Phone:</strong> +265 99 363 48 27<br>
              <strong>Email:</strong> info@nextgenmw.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4 class="text-white">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4 class="text-white">Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">WMobile app development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Backend development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">IT Consultancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="text-white">Tech support</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4 class="text-white">Our Social Networks</h4>
            <p class="text-white">Connect with us via social media</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <strong><span class="text-white"> NEXTGENERATIONS Malawi</span></strong> <span class="text-warning">&copy</span> <span class="text-white">All Rights Reserved</span>
      </div>
      
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <script src="../assets/js/main.js"></script>

</body>

</html>