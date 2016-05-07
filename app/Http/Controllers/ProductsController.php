<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends BaseController
{
    public function index()
    {
        return view('pages.products');
    }

    protected function getSelectedMenu()
    {
        return 'products';
    }
}
