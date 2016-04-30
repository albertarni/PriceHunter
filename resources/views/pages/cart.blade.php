@extends('layouts.master')

@section('content')

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            @include('includes.sidebar')

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">

                        @include('partials.cart.cart-items')

                        <div class="cart-collaterals">

                            @include('partials.cart.recommended-product')
                            @include('partials.cart.total')
                            @include('partials.cart.shipping-calculator')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


