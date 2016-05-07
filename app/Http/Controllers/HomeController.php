<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends BaseController
{
    public function index()
    {
        return view('pages.index');
    }

    protected function getSelectedMenu()
    {
        return 'home';
    }

}
