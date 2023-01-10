@extends('layouts.Master')
@section('content')
    <!--=====================================
                                                                    BANNER PART START
                                                        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>all category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">all-category</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                                                    BANNER PART END
                                                        =======================================-->


    <!--=====================================
                                                                    CATEGORY PART START
                                                        =======================================-->
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                        <div class="filter-show">
                        </div>
                        <div class="filter-short">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                @foreach ($category as $cat)
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="{{ asset('images/category/' . $cat->image) }}" alt="category">
                            </div>
                            <div class="category-meta">
                                <h4>{{ $cat->name }}</h4>
                                @php
                                    $product_count = \App\Models\Product::where('category_id', $cat->id)->count();
                                @endphp
                                <p>({{ $product_count }} items)</p>
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
    </section>
    <!--=====================================
                                                                    CATEGORY PART END
                                                        =======================================-->
@endsection
