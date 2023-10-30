@extends('auth.layout')

@section('title' , 'Login')
@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <a class="brand-logo" href="{{ route('home') }}">
                        {{-- Logo --}}
                        <h2 class="brand-text text-primary ms-1">M.Valet</h2>
                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                class="img-fluid" src="{{ asset('app-assets/images/pages/login-v2.svg') }}"
                                alt="Login V2" /></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Login-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <form method="POST" action="{{ route('login') }}" class="auth-login-form mt-2">
                                    @csrf
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    {{-- <input class="form-control" id="login-email" type="text" name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" /> --}}
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">

                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="············"
                                        aria-describedby="login-password" tabindex="2" name="password" required autocomplete="current-password">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember-me"> Remember Me</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Login-->
                </div>
            </div>
        </div>
    </div>
@endsection
