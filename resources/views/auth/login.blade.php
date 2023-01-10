@extends('layouts.Master')
@section('content')
    <!--=====================================
                                                                        USER FORM PART START
                                                            =======================================-->
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo">
                        <a href="index.html">
                            <h2 style="color:#119744;font-weight:800; ">STORE4U</h2>
                        </a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>welcome!</h2>
                            <p>Use your credentials to access</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with
                                        facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a>
                                </li>
                                <li><a href="{{ url('auth/google') }}" class="google"><i class="fab fa-google"></i>login
                                        with google</a></li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with
                                        instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" placeholder="Enter Your E-mail" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Enter Your Password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn btn-primary mb-3 p-1">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Don't have any account?<a href="{{ url('register') }}">register here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">STORE4U</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                        USER FORM PART END
                                                            =======================================-->
@endsection
