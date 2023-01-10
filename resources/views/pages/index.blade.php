@extends('layouts.Master')

<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="#"></a>




@section('content')
    <!--=====================================
                                                        BANNER PART START-->
    <!--        =======================================-->
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi
                            </p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="{{ url('') }}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="{{ url('') }}">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img  ">
                            <img src="images/home/index/01.jpg" alt="index">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/home/index/02.jpg" alt="index">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi
                            </p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="{{ url('') }}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                                <a class="btn btn-outline" href="">
                                    <i class="icofont-sale-discount"></i>
                                    <span>get offer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                    <!--                    BANNER PART END-->
    <!--        =======================================-->

    <!--===================================== -->
    {{-- NEWSLETTER PART START --}}
    <!--    =======================================-->
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
    <!--=====================================-->
    {{-- NEWSLETTER PART END --}}
    <!--        =======================================-->


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
