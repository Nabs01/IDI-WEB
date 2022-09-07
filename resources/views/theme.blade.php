<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pt. Infrstruktur Digital Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('images/favicon.ico')}}">
  <link rel="icon" type="image/x-icon"href="{{asset('images/favicon.ico')}}">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" />
  

  <!--  CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  @yield('custom_css')


  <!-- JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>$(function() {
  AOS.init();
});</script>
</head>

<body>
  <header id="header" class="fixed-top">
    @include('header')
  </header>

  @yield('content')

  <footer id="footer">
    @include('footer')
  </footer>

 

  

  <!-- Template Main JS File -->
  <!-- <script src="{{ asset('js/main.js') }}"></script> -->
  @yield('custom_js')

</body>
</html>