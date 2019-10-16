<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

    <link rel="stylesheet" href="{{asset('foruser/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('foruser/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('foruser/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('foruser/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('foruser/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('foruser/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('foruser/css/style.css')}}">
    @stack('css')
  </head>
  <body>
    
   @include('user.includes.navbar')
    <!-- END nav -->
    
   
    @yield('content')
  

  <!-- loader -->
  


  <script src="{{asset('foruser/js/jquery.min.js')}}"></script>
  <script src="{{asset('foruser/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('foruser/js/popper.min.js')}}"></script>
  <script src="{{asset('foruser/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('foruser/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('foruser/js/aos.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('foruser/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('foruser/js/scrollax.min.js')}}"></script>
  <script src="{{asset('foruser/js/google-map.js')}}"></script>
  <script src="{{asset('foruser/js/main.js')}}"></script>
  <script src="{{asset('foruser/js/jquery.validate.min.js')}}"></script>
    @stack('js')
  </body>
</html>