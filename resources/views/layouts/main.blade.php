@extends('layouts.master')

<!-- Navbar -->
@section('navbar-main')
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.html">
            <img src="{{ asset('argon-dashboard-master/assets/img/brand/white.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
            <div class="row">
                <div class="col-6 collapse-brand">
                <a href="dashboard.html">
                    <img src="{{ asset('argon-dashboard-master/assets/img/brand/blue.png') }}">
                </a>
                </div>
                <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                </button>
                </div>
            </div>
            </div>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                <span class="nav-link-inner--text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="login.html" class="nav-link">
                <span class="nav-link-inner--text">Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="register.html" class="nav-link">
                <span class="nav-link-inner--text">Register</span>
                </a>
            </li>
            </ul>
            <hr class="d-lg-none" />
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
                <i class="fab fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                <i class="fab fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
                <i class="fab fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
                <i class="fab fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
                <a href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=ad_upgrade_pro" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                    <i class="fas fa-shopping-cart mr-2"></i>
                </span>
                <span class="nav-link-inner--text">Upgrade to PRO</span>
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

<!-- Content Header -->
@section('main-content-header')
<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    @yield('content-header')
</div>
@endsection

<!-- Main Content -->
@section('main-content-container')
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        @yield('content-body')
    </div>
</div>
@endsection

<!-- Footer -->
@section('footer-main')
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection