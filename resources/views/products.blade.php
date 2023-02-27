@extends('layouts.navBar')

@section('style')
    <link rel="stylesheet" href="{{ asset('CSS/products.css') }}">
@endsection

@section('content')

    <div class="container">
        <h1 class="section-header">Our Products</h1>
        <div class="product-card">
            {{-- <div class="new-product">
                <p>New</p>
            </div> --}}
            <div class="product-image">
                <img src="imgs/products/pro4.png" alt="">
            </div>
            <div class="product-about">
                <div class="product-info">
                    <h3>Plate freid chicken wings</h3>
                    <p>Healthy Freid Chicken Healthy Freid Chicken Healthy Freid Chicken</p>
                </div>
                <div class="product-ratio">
                    <div class="product-price">
                        $40<span> / 1 plate</span>
                    </div>
                    <div class="product-rating">
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-solid fa-star orange"></i>
                        <i class="fa-regular fa-star"></i>
                        3.9
                    </div>
                </div>
                <div class="product-buttons">
                    <button class="buy-button">More Details</button>
                    <button class="add-to-card"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>

    </div>

@endsection