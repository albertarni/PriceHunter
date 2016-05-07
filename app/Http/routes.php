<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'HomeController', [
    'names' => [
        'index' => 'home.index',
    ],
    'only' => 'index'
]);

Route::resource('/products', 'ProductsController', ['only' => 'index']);
Route::resource('/cart', 'CartController', ['only' => 'index']);
Route::resource('/checkout', 'CheckoutController', ['only' => 'index']);
Route::resource('/scrape', 'ScrapeController', ['only' => 'index']);

Route::group(['namespace' => 'Api', 'prefix' => 'api/v1'], function() {
    Route::resource('products', 'ProductsController');
});