@extends('layouts.Master')
@section('content')
    <link rel="stylesheet" href="css/profile.css">


    <!--=====================================
                        BANNER PART START
            =======================================-->
    <section class="inner-section single-banner" style="">
        <div class="container">
            <h2>my profile</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                        BANNER PART END
            =======================================-->


    <!--=====================================
                        PROFILE PART START
            =======================================-->
    <section class="inner-section profile-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your Profile</h4>
                            <button data-bs-toggle="modal" data-bs-target="#profile-edit">edit profile</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="profile-image">
                                        <a href="#"><img src="images/user.png" alt="user"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="profile-btn">
                                        <a href="change-password.html">change pass.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=====================================
                        PROFILE PART END
            =======================================-->
@endsection
