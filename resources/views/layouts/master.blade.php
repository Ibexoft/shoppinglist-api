<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('argon-dashboard-master/assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('argon-dashboard-master/assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar Main-->
    @yield('navbar-main')

    <!-- Sidenav -->
    @yield('sidenav')

    <!-- Main content -->
    <div class="main-content">
        <!-- Topnav -->
        @yield('navbar-top')

        <!-- Header -->
        @yield('main-content-header')

        <!-- Page content -->
        @yield('main-content-container')
    </div>
    <!-- Footer -->
    @yield('footer-main')
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('argon-dashboard-master/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('argon-dashboard-master/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('argon-dashboard-master/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('argon-dashboard-master/assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>