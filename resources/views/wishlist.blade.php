@extends('layouts.Master')
@section('content')
    <!--=====================================
                                        BANNER PART START
                            =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>wishlist</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                        BANNER PART END
                            =======================================-->


    <!--=====================================
                                        WISHLIST PART START
                            =======================================-->
    <section class="inner-section wishlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">description</th>
                                    {{-- <th scope="col">status</th> --}}
                                    {{-- <th scope="col">shopping</th> --}}
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $pro)
                                    <tr>
                                        <td class="table-serial">
                                            <h6>{{ $pro->id }}</h6>
                                        </td>
                                        <td class="table-image"><img src="{{ asset('images/products/' . $pro->image) }}"
                                                alt="product"></td>
                                        <td class="table-name">
                                            <h6>{{ $pro->name }}</h6>
                                        </td>
                                        <td class="table-price">
                                            <h6>${{ $pro->price }}</h6>
                                        </td>
                                        <td class="table-desc">
                                            <p>{{ $pro->description }}</p>
                                        </td>
                                        <td class="table-action">
                                            <a class="view" href="{{ url('product/' . $pro->id) }}" title="Quick View"><i
                                                    class="fas fa-eye"></i></a>
                                            <a class="trash" href="{{ url('remove-wishlist/' . $pro->id) }}"
                                                title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                        WISHLIST PART END
                            =======================================-->
@endsection
