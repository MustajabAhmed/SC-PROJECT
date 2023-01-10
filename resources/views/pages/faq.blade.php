@extends('layouts.Master')
@section('content')
    <!--=====================================
                            BANNER PART START
                =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>faq questions</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">faq</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                            BANNER PART END
                =======================================-->


    <!--=====================================
                              FAQ PART START
                =======================================-->
    <section class="inner-section faq-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="faq-parent">
                        <div class="faq-child">
                            <div class="faq-que">
                                <button>How to contact with Customer Service?</button>
                            </div>
                            <div class="faq-ans">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que">
                                <button>App installation failed, how to update system information?</button>
                            </div>
                            <div class="faq-ans">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que">
                                <button>Website reponse taking time, how to improve?</button>
                            </div>
                            <div class="faq-ans">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que">
                                <button>How do I create a account?</button>
                            </div>
                            <div class="faq-ans">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que">
                                <button>I cannot find an answer to my question!</button>
                            </div>
                            <div class="faq-ans">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                              FAQ PART END
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
