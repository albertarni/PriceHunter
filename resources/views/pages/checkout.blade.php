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
                        @include('partials.checkout.login-customer')
                        @include('partials.checkout.coupon')
                        @include('partials.checkout.customer-details')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
