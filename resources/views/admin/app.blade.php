<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config("app.name")}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <link href="../img/icon.png" rel="icon">
  <link href="../img/icon.png" rel="apple-touch-icon">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="../../admin/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 
  <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="../../admin/plugins/summernote/summernote-bs4.css">
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  @if (session('status'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    Success alert preview. This alert is dismissable.
  </div>
  @endif

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/v1/admin/home-page" class="nav-link">Home</a>
      </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href{{ route('logout') }}" role="button" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../img/icon.png" alt="Nextgenerations Malawi Logo" class="brand-image">
      <span class="brand-text font-weight-light"> <h3>ADMIN</h3> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../img/staff/kelvin_chidothi.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/v1/admin/profile" class="d-block">Kelvin Chidothi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-header">WEBSITE</li>
          <li class="nav-item">
            <a href="/v1/admin/home-page" class="nav-link">
              <i class="nav-icon fas fa-laptop-house"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contact us
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/v1/admin/pages" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                All pages
              </p>
            </a>
            
          </li>
        
          <li class="nav-header">SOCIAL</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
                <i class="nav-icon fab fa-facebook-square"></i>
              <p>Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
                <i class="nav-icon fab fa-twitter"></i>
              <p>Twitter</p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
                <i class="nav-icon fab fa-linkedin"></i>
              <p>LinkedIn</p>
            </a>
          </li>  


          <li class="nav-header">Extras</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Cpanel</p>
            </a>
          </li>  

        </ul>
      </nav>
    </div>
  </aside>


    @yield('content')
   
  <footer class="main-footer">
    <strong>Copyright &copy; {{ now()->year }} <a href="http://nextgenmw.com">Nextgenerations Malawi</a>.</strong>
    Version 1.0.0
  </footer>



<script src="../../admin/plugins/jquery/jquery.min.js"></script>

<script src="../../admin/plugins/jquery-ui/jquery-ui.min.js"></script>



<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../admin/plugins/chart.js/Chart.min.js"></script>

<script src="../../admin/plugins/sparklines/sparkline.js"></script>

<script src="../../admin/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="../../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="../../admin/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="../../admin/plugins/moment/moment.min.js"></script>

<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="../../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="../../admin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="../../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="../../admin/dist/js/adminlte.js"></script>

<script src="../../admin/dist/js/pages/dashboard.js"></script>

<script src="../../admin/dist/js/demo.js"></script>

<script src="../../plugins/pace-progress/pace.min.js"></script>


</body>
</html>
