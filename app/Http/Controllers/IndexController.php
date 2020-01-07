<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

class IndexController extends Controller
{
    //
    function index(){
        return view('pages.index');
    }

}
