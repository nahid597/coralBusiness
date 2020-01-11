<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cart;
use Auth;

class OrderController extends Controller
{
    //
    public function index()
    {
        return view('pages.order_success');
    }

    public function update()
    {
        $user = Auth::user();
        $carts = cart::where('user_id', $user->id)->get();
       dd ("nahid");
        if(!is_null($carts))
        {
            foreach($carts as $cart)
            {
                $cart->product_id=null;
                $cart->product_quantity = 0;
            }

            $carts->save();
        }

        return back();
    }
}
