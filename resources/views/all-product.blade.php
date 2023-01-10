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
            <h2>Products</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                                                            BANNER PART END
                                                                =======================================-->


    <!--=====================================
                                                                            SHOP PART START
                                                                =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">

                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                        @foreach ($products as $pro)
                            <div class="col">
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            {{-- <label class="label-text new">new</label> --}}
                                        </div>
                                        <button class="product-wish wish">
                                            @if (Auth::user())
                                                @php
                                                    $check = \App\Models\Wishlist::where('user_id', Auth::user()->id)
                                                        ->where('product_id', $pro->id)
                                                        ->first();
                                                @endphp
                                                @if (isset($check->id))
                                                    <a href="{{ url('remove-wishlist/' . $pro->id) }}"><i
                                                            class="fas fa-heart"></i></a>
                                                @else
                                                    <a href="{{ url('add-wishlist/' . $pro->id) }}"><i
                                                            class="fas fa-heart"></i></a>
                                                @endif
                                            @else
                                                <a href="{{ route('login') }}"><i class="fas fa-heart"></i></a>
                                            @endif
                                        </button>
                                        <a class="product-image" href="{{ url('product/' . $pro->id) }}">
                                            <img style=" height:200px; width:430px;"
                                                src="{{ asset('images/products/' . $pro->image) }}"
                                                class="img-fluid img-thumbnail" alt="product">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="{{ url('product/' . $pro->id) }}">{{ $pro->name }}</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>${{ $pro->price }}</span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                            SHOP PART END
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
