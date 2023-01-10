@extends('layouts.Master')
@section('content')
    <!--=====================================
                                    CATEGORY SIDEBAR PART START
                            =======================================-->


    <!--=====================================
                                        BANNER PART START
                            =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Discount & offers</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">offer</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                        BANNER PART END
                            =======================================-->


    <!--=====================================
                                         OFFER PART START
                            =======================================-->
    <section class="inner-section offer-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/01.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/02.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/03.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/04.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/05.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/06.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="offer-card">
                        <a href="#"><img src="images/offer/07.jpg" alt="offer"></a>
                        <div class="offer-div">
                            <h5 class="offer-code">RAMADAN20</h5>
                            <button class="offer-select">copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                         OFFER PART END
                            =======================================-->


    <!--=====================================
                                        NEWSLETTER PART START
                            =======================================-->
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                        NEWSLETTER PART END
                            =======================================-->


    <!--=====================================
                                        INTRO PART START
                            =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                        INTRO PART END
                            =======================================-->
@endsection
