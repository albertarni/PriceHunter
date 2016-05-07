@extends('layouts.master')

@section('content')

    <div ng-app="productsApp" ng-controller="ProductsCtrl" class="single-product-area">
        @include('partials.products.index')
    </div>

@stop

@section('custom-scripts')
    <script src="{{asset('js/angular/products.js')}}"></script>
@stop






