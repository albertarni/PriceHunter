<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CheckoutController extends BaseController
{
    public function index()
    {
        return view('pages.checkout');
    }

    protected function getSelectedMenu()
    {
        return 'checkout';
    }
}
