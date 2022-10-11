<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('user/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('user/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
  <link rel="shortcut icon" href="{{ asset('user/images/favicon.png')}}">
  
</head>
<body>
    <div class="container-scroller">
        @include('layouts.inc.user.navbar')
        <div class="container-fluid page-body-wrapper">
        @include('layouts.inc.user.sidebar')

           <div class="main-panel">
               <div class="content-wrapper">
                   @yield('content')
               </div>
           </div>
        </div>

    </div>

    <script src="{{ asset('user/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('user/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{asset('user/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('user/js/off-canvas.js') }}"></script>
  <script src="{{ asset('user/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('user/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('user/js/dashboard.js') }}"></script>
  <script src="{{ asset('user/js/data-table.js') }}"></script>
  <script src="{{ asset('user/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('user/js/dataTables.bootstrap4.js') }}"></script>
</body>
</html>