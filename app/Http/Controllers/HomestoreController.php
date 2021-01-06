<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestoreController extends Controller
{
    //
    public function index()
    {
        return view('store/home');
    }

    public function selected_product()
    {
        return view('/store/selected');
    }
}
