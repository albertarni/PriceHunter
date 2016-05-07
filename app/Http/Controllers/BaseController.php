<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

abstract class BaseController extends Controller
{

    public function __construct()
    {
        $this->selectMenu();
    }

    private function selectMenu()
    {
        View::share('selected_menu', $this->getSelectedMenu());
    }

    protected abstract function getSelectedMenu();
}
