<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Libraries\Scrapter;

class ScrapeController extends Controller
{
    public function index()
    {
        Scrapter::getProducts();
    }


}
