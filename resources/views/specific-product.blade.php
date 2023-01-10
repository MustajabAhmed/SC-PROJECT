@extends('layouts.Master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">




    <!--=====================================
                                                                                                                                                                                    BANNER PART START
                                                                                                                                                                        =======================================-->
    <section class="single-banner inner-section" style="">
        <div class="container">
            <h2>Product</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                    BANNER PART END
                                                                                                                                                                        =======================================-->


    <!--=====================================
                                                                                                                                                                                PRODUCT DETAILS PART START
                                                                                                                                                                        =======================================-->
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                        </div>

                        {{-- @php
                            dd($product);
                        @endphp --}}
                        <img class="img-fluid" src="{{ '/images/products/' . $product->image }}" alt="product">

                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="details-content">
                        <h3 class="details-name"><a href="#">{{ $product->name }}</a></h3>
                        <div class="details-meta">
                            <p>SKU:<span>{{ $product->SKU }}</span></p>
                        </div>
                        <div class="details-rating">
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="active icofont-star"></i>
                            <i class="icofont-star"></i>
                            <a href="#">(3 reviews)</a>
                        </div>
                        <h3 class="details-price">
                            <span>${{ $product->price }}
                            </span>
                        </h3>
                        <p class="details-desc">{{ $product->description }}</p>
                        <form action="{{ url('add-cart') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <label for="">Quantity: </label>
                            <input type="text" name="quantity" value="1">
                            <div class="details-add-group">
                                @if (Auth::user())
                                    @php
                                        $check = \App\Models\Cart::where('user_id', Auth::user()->id)
                                            ->where('product_id', $product->id)
                                            ->first();
                                    @endphp
                                    @if (isset($check->id))
                                        <a href="{{ url('remove-cart/' . $product->id) }}" class="product-add"
                                            title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </a>
                                    @else
                                        <button type="submit" class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                    @endif
                                @else
                                    <a href="{{ route('login') }}" class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add to cart</span>
                                    </a>
                                @endif
                        </form>
                    </div>
                    <div class="details-action-group">
                        @if (Auth::user())
                            @php
                                $check = \App\Models\Wishlist::where('user_id', Auth::user()->id)
                                    ->where('product_id', $product->id)
                                    ->first();
                            @endphp
                            @if (isset($check->id))
                                <a href="{{ url('remove-wishlist/' . $product->id) }}"><i class="fas fa-heart"></i></a>
                            @else
                                <a href="{{ url('add-wishlist/' . $product->id) }}"><i class="fas fa-heart"></i></a>
                            @endif
                        @else
                            <a href="{{ route('login') }}"><i class="fas fa-heart"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                PRODUCT DETAILS PART END
                                                                                                                                                                        =======================================-->


    <!--=====================================
                                                                                                                                                                                  PRODUCT TAB PART START
                                                                                                                                                                        =======================================-->
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">Reviews</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane active" id="tab-reve">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-frame">
                            <ul class="review-list">
                                @foreach ($review as $item)
                                    <li class="review-item">
                                        <div class="review-media">
                                            <a class="review-avatar" href="#">
                                                <img src="images/avatar/04.jpg" alt="review">
                                            </a>
                                            <h5 class="review-meta">
                                                <a href="#">{{ $item->name }}</a>
                                                <span>{{ $item->created_at }}</span>
                                            </h5>
                                        </div>
                                        <ul class="review-rating">
                                            @if ($item->rating == 1)
                                                <li class="icofont-ui-rating"></li>
                                            @elseif($item->rating == 2)
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                            @elseif($item->rating == 3)
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                            @elseif($item->rating == 4)
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                            @elseif($item->rating == 5)
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                                <li class="icofont-ui-rating"></li>
                                            @endif
                                        </ul>
                                        <p class="review-desc">{{ $item->description }}</p>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="product-details-frame">
                            <h3 class="frame-title">add your review</h3>
                            <form action="{{ url('add_review') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="star-rating">
                                            <input type="radio" name="rating" value="5" id="star-1"><label
                                                for="star-1"></label>
                                            <input type="radio" name="rating" value="4" id="star-2"><label
                                                for="star-2"></label>
                                            <input type="radio" name="rating" value="3" id="star-3"><label
                                                for="star-3"></label>
                                            <input type="radio" name="rating" value="2" id="star-4"><label
                                                for="star-4"></label>
                                            <input type="radio" name="rating" value="1" id="star-5"><label
                                                for="star-5"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" placeholder="Describe"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-inline">
                                            <i class="icofont-water-drop"></i>
                                            <span>drop your review</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                    PRODUCT TAB PART END
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
