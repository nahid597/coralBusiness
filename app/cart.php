<?php

namespace App;

use Auth;
use App\Products;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //
    public $fillable = [
        
        'products_id',
        'user_id',
        'order_id',
        'product_quantity',
   ];

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function order()
   {
       return $this->belongsTo(Order::class);
   }

//    public function product()
//    {
//        return $this->belongsTo(Products::class);
//    }

   public function product()
    {
        return $this->belongsTo('App\Products', 'products_id');
    }


   // total items in cart

   public static function totalItems()
   {
        if(Auth::check())
        {
            $carts = cart::where('user_id', Auth::id())
                ->get();
        }   

        else
        {
            $carts = null;
        }

        $total_item = 0;

        if(!is_null($carts))
            foreach($carts as $cart)
            {
                $total_item += $cart->product_quantity;
            }

        return $total_item;
   }

   // total carts
   public static function totalCarts()
   {
        if(Auth::check())
        {
            $carts = cart::where('user_id', Auth::id())
                ->get();
        }   

        else
        {
            $carts = null;
        }

        return $carts;
   }
}
