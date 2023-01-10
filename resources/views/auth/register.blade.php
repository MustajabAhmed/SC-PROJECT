@extends('layouts.Master')
@section('content')
    <link rel="stylesheet" href="css/user-auth.css">


    <!--=====================================
                                                    USER FORM PART START
                                        =======================================-->
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo">
                        <a href="index.html">
                            <h2 style="color:#119744;font-weight:800;">Store4U</h2>
                        </a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Setup A New Account In A Minute</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with
                                        facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with twitter</a>
                                </li>
                                <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a></li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with
                                        instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" placeholder="Name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" placeholder="Email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="check">Accept all the <a href="#">Terms &
                                            Conditions</a></label>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn btn-primary p-1">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Already Have An Account?<a href="{{ url('login') }}">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">Store4U</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
