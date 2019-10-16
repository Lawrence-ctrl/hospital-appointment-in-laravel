<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('foryou/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('foryou/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('foryou/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('foryou/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('foryou/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('foryou/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('foryou/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('foryou/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('foryou/DataTable/datatables.min.css')}}">
    @stack('css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    @include('admin.includes.sidebar')
    <div class="page">
      <!-- navbar-->
     @include('admin.includes.navbar')
     <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">@yield('pagename')</li>
        </ul>
      </div>
    </div>
    <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">@yield('pagename')</h1> 
          </header>
      <!-- Counts Section -->
       @yield('content')
        </div>
        </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2019</p>
            </div>
            <div class="col-sm-6 text-right">
             
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('foryou/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('foryou/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('foryou/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('foryou/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('foryou/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('foryou/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('foryou/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('foryou/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('foryou/js/charts-home.js')}}"></script>
    <script src="{{asset('foryou/DataTable/Buttons-1.5.6/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('foryou/DataTable/datatables.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('foryou/js/front.js')}}"></script>
    @stack('js')
  </body>
</html>