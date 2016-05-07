@extends('layouts.master')

@section('content')

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            @include('includes.sidebar')

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Home</a>
                        <a href="">Category Name</a>
                        <a href="">Sony Smart TV - 2015</a>
                    </div>

                    <div class="row">
                        @include('old_views.single_product.images')

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">Sony Smart TV - 2015</h2>
                                <div class="product-inner-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>

                                <div class="product-inner-category">
                                    <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        @include('old_views.single_product.description')
                                        @include('old_views.single_product.review')
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    @include('old_views.single_product.related-products')

                </div>
            </div>
        </div>
    </div>
</div>

@stop
