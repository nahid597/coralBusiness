<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cart;
use Auth;

class CartController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.cart');
    }

    public function store(Request $request)
    {
       $this->validate($request, [
           'product_id' => 'required'
       ],
          [
              'product_id.required' => 'please added product!'
          ]
       
          );

        $carts = cart::orWhere('user_id', Auth::id())
                    ->where('products_id', $request->product_id)
                    ->first();

        
        if(!is_null($carts))
        {
            $carts->increment('product_quantity');
        }
        else{
            
            $carts = new cart();

            if(Auth:: check())
            {
                $carts->user_id = Auth::id();
            }

            $carts->products_id = $request->product_id;

            $carts->save();
        }

        session()->flash('success', 'product successfully added!!');

        return back();

    }

    public function update(Request $request, $id)
    {
        $cart = cart::find($id);

        if(!is_null($cart))
        {
            $cart->product_quantity = $request->product_quantity;
            $cart->save();
        }

        else{

            return redirect()->route('carts');
        }

        return back();


    }

    public function delete(Request $request, $id)
    {
        $cart = cart::find($id);

        if(!is_null($cart))
        {
            $cart->delete();
        }

        else{

            return redirect()->route('carts');
        }

        return back();

    }

}
