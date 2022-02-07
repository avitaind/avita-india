<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomusController extends Controller
{
    //
    function index(){

        return view('product.domus.index');
    }

    function smart(){

        return view('product.domus.smart');
    }

    function conventional(){

        return view('product.domus.conventional');
    }


    function emergency(){

        return view('product.domus.emergency');
    }


}
