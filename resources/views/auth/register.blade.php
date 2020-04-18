@extends('layouts.main')
<!-- Content Header -->
@section('content-header')
<div class="container">
    <div class="header-body text-center mb-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <img src="{{ asset('argon/assets/img/brand/icon.svg') }}" class="wide-img">
                <h1 class="text-white">Create an account</h1>
                <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Main Content -->
@section('content-body')
<div class="col-lg-6 col-md-8">
    <div class="card bg-secondary border-0">
        <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
            <div class="text-center">
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
                <small>Or sign up with credentials</small>
            </div>
            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input id="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                        <input id="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="new-password">
                        @error('password')
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
                        <input id="password-confirm" class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                            <label class="custom-control-label" for="customCheckRegister" required>
                                <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <a href="{{ route('login') }}" class="text-light"><small>{{ __('Login') }}</small></a>
        </div>
    </div>
</div>
@endsection



