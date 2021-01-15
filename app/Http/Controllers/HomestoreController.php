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

    public function seller()
    {
        return view('/store/seller');
    }

    public function aboutus()
    {
        return view('/store/aboutus');
    }

    public function customer_care()
    {
        return view('/store/customercare');
    }
}
