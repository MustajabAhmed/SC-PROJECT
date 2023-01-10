<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="#"></a>

<!--=====================================
                    HEADER TOP PART START
        =======================================-->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to Ecomart in Your Dream Online Store!</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                <ul class="header-top-list">
                    <li><a href="{{ url('offer') }}">offers</a></li>
                    <li><a href="{{ url('faq') }}">need help</a></li>
                    <li><a href="{{ url('contact') }}">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=====================================
                    HEADER TOP PART END
        =======================================-->



<!--=====================================
                    HEADER PART START
        =======================================-->
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user"><img src="{{ asset('images/user.png') }}" alt="user"></button>
                <a href="{{ url('/') }}">
                    <h2 style="color:#119744;font-weight:800;">Store4U</h2>
                </a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>

            <a href="{{ url('/') }}" class="header-logo">
                <h2 style="color:#119744;font-weight:800;">Store4U</h2>
            </a>
            @if (Auth::user())
                <p class="header-widget" title="My Account">{{ Auth::user()->name }}
                    <img src="{{ asset('images/user.png') }}" alt="user">
                    <span></span>
                </p>
            @else
                <a href="{{ url('login') }}" class="header-widget" title="My Account">
                    <img src="{{ asset('images/user.png') }}" alt="user">
                    <span>join</span>
                </a>
            @endif
            <form class="header-form">
                <input type="text" placeholder="Search anything...">
                <button><i class="fas fa-search"></i></button>
            </form>
            {{-- @php
            $location = App\Http\Controllers\LocationController::index();
            @endphp --}}


            <p>{{ $location ?? '' }}</p>
            <div class="header-widget-group">
                @if (Auth::user())
                    <a href="{{ url('wishlist') }}" class="header-widget" title="Wishlist">
                        <i class="fas fa-heart"></i>
                        @php
                            $count_wish = \App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
                        @endphp
                        <sup>{{ $count_wish }}</sup>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="header-widget" title="Wishlist">
                        <i class="fas fa-heart"></i>
                        {{-- <sup></sup> --}}
                    </a>
                @endif

                @if (Auth::user())
                    <a href="{{ url('checkout') }}" class="header-widget header-cart" title="Cartlist">
                        <i class="fas fa-shopping-basket"></i>
                        @php
                            $count_cart = \App\Models\Cart::where('user_id', Auth::user()->id)->count();
                        @endphp
                        <sup>{{ $count_cart }}</sup>
                    @else
                        <a href="{{ route('login') }}" class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                @endif
                {{-- <span>total price<small>$345.00</small></span> --}}
                </a>
            </div>
        </div>
    </div>
</header>
<!--=====================================
                    HEADER PART END
        =======================================-->


<!--=====================================
                    NAVBAR PART START
        =======================================-->
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item dropdown">
                            <a class="navbar-link " href="{{ url('/') }}">home</a>
                        </li>
                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">shop</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">Shop</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="{{ url('all-catagory') }}">All Categories</a></li>
                                                    <li><a href="{{ url('all-product') }}">All Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">category</a>
                            <div class="megamenu">
                                <div class="container megamenu-scroll">
                                    <div class="row row-cols-5">
                                        @php
                                            $category = \App\Models\Category::all();
                                            // dd($category);
                                        @endphp

                                        @foreach ($category as $cat)
                                            <div class="col">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">{{ $cat->name }}</h5>
                                                    @php
                                                        $product = \App\Models\Product::where('category_id', $cat->id)->get();
                                                    @endphp
                                                    <ul class="megamenu-list">
                                                        @foreach ($product as $pro)
                                                            <li><a
                                                                    href="{{ url('product/' . $pro->id) }}">{{ $pro->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown-arrow" href="#">pages</a>
                            <ul class="dropdown-position-list">
                                @if (Auth::user())
                                    <li><a href="{{ url('profile') }}">my profile</a></li>
                                @endif
                                <li><a href="{{ url('about') }}">about us</a></li>
                                <li><a href="{{ url('offer') }}">offer</a></li>
                                <li><a href="{{ url('faq') }}">need help</a></li>
                                <li><a href="{{ url('contact') }}">contact us</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                            <ul class="dropdown-position-list">
                                @if (!Auth::user())
                                    <li><a href="{{ url('login') }}">login</a></li>
                                    <li><a href="{{ url('register') }}">register</a></li>
                                @endif
                                @if (Auth::user())
                                    <li>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <div class="navbar-info">
                            <i class="icofont-ui-touch-phone"></i>
                            <p>
                                <small>call us</small>
                                <span>(+880) 183 8288 389</span>
                            </p>
                        </div>
                        <div class="navbar-info">
                            <i class="icofont-ui-email"></i>
                            <p>
                                <small>email us</small>
                                <span>support@STORE4U.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--=====================================
                    NAVBAR PART END
        =======================================-->


<!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
<div class="mobile-menu">
    <a href="index.html" title="Home Page">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <a href="{{ url('all-catagory') }}" title="Category">
        <i class="fas fa-shopping-basket"></i>
        <span>Category</span>
        {{-- <sup>0</sup> --}}
    </a>
    <a href="{{ url('all-product') }}" title="Product">
        <i class="fas fa-shopping-basket"></i>
        <span>Product</span>
        {{-- <sup>0</sup> --}}
    </a>
    <a href="{{ url('checkout') }}" title="Cartlist">
        <i class="fas fa-shopping-basket"></i>
        <span>CartList</span>
        {{-- <sup>0</sup> --}}
    </a>
    <a href="{{ url('wishlist') }}" title="Wishlist">
        <i class="fas fa-heart"></i>
        <span>wishlist</span>
        {{-- <sup>0</sup> --}}
    </a>
</div>
<!--=====================================
                    MOBILE-MENU PART END
        =======================================-->
