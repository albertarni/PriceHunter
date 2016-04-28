<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return 'index page';
    }

    public function store()
    {
        return 'store';
    }

}
