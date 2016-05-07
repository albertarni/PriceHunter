<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends BaseController
{
    public function index()
    {
        return view('pages.cart');
    }

    protected function getSelectedMenu()
    {
        return 'cart';
    }
}
