@extends('layouts.Master')
@section('content')
    <link rel="stylesheet" href="css/checkout.css">






    <!--=====================================
                                                        BANNER PART START
                                            =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Cart List</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                {{-- <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Cart List</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                                                        BANNER PART END
                                            =======================================-->


    <!--=====================================
                                                        CHECKOUT PART START
                                            =======================================-->
    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your order</h4>
                        </div>
                        <div class="account-content">
                            <div class="table-scroll">
                                <table class="table-list">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sub_total = 0;
                                            $i = 0;
                                        @endphp
                                        @foreach ($cart as $ca)
                                            <tr>
                                                @php
                                                    $total = $ca->quantity * $ca->product_price;
                                                    $sub_total = $sub_total + $total;
                                                    $prodduct[$i]['product'] = $ca->product_id;
                                                    $prodduct[$i]['quantity'] = $ca->quantity;
                                                    $prodduct[$i]['total'] = $total;
                                                    $i++;
                                                @endphp
                                                <td class="table-serial">
                                                    <h6>{{ $ca->id }}</h6>
                                                </td>
                                                <td class="table-image"><img
                                                        src="{{ 'images/products/' . $ca->product_image }}" alt="product">
                                                </td>
                                                <td class="table-name">
                                                    <h6>{{ $ca->product_name }}</h6>
                                                </td>
                                                <td class="table-price">
                                                    <h6>${{ $ca->product_price }}</h6>
                                                </td>
                                                <td class="table-brand">
                                                    <h6>{{ $total }}</h6>
                                                </td>
                                                <td class="table-quantity">
                                                    <h6>{{ $ca->quantity }}</h6>
                                                </td>
                                                <td class="table-action">
                                                    <a class="view" href="{{ url('product/' . $ca->product_id) }}"
                                                        title="Quick View"><i class="fas fa-eye"></i></a>
                                                    <a class="trash" href="{{ url('remove-cart/' . $ca->product_id) }}"
                                                        title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="chekout-coupon">
                                <button class="coupon-btn">Do you have a coupon code?</button>
                                <form class="coupon-form">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit"><span>apply</span></button>
                                </form>
                            </div>
                            <div class="checkout-charge">
                                <ul>
                                    <li>
                                        <span>Sub total</span>
                                        <span>${{ $sub_total }}</span>
                                    </li>
                                    <li>
                                        <span>delivery fee</span>
                                        <span>$10.00</span>
                                    </li>
                                    <li>
                                        <span>discount</span>
                                        <span>$00.00</span>
                                    </li>
                                    <li>
                                        <span>Total<small>(Incl. VAT)</small></span>
                                        <span>$277.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=====================================
                                                        CHECKOUT PART END
                                            =======================================-->
@endsection
