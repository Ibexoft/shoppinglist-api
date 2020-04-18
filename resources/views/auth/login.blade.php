@extends('layouts.main')

<!-- Content Header -->
@section('content-header')
<div class="container">
    <div class="header-body text-center mb-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <img src="{{ asset('argon/assets/img/brand/icon.svg') }}" class="wide-img">
                <h1 class="text-white">Sign In</h1>
                <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Main Content -->
@section('content-body')
<div class="col-lg-5 col-md-7">
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-secondary btn-icon text-primary">
                    <span class="btn-inner--icon"><i class="fab fa-facebook-f"></i></span>
                    <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-secondary btn-icon text-primary">
                    <span class="btn-inner--icon"><i class="fab fa-google"></i></span>
                    <span class="btn-inner--text">Google</span>
                </a>
            </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
            </div>
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                        <span class="text-muted">{{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        @if (Route::has('password.request'))
            <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-light"><small>{{ __('Forgot Your Password?') }}</small></a>
            </div>
        @endif
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light"><small>{{ __('Create new account') }}</small></a>
        </div>
    </div>
</div>
@endsection
