<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $fillable = [
         'user_id',
         'name',
         'phone',
         'shipping_address',
         'email',
         'message',
         'is_paid',
         'is_complete'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carts()
    {
        return $this->belongsTo(cart::class);
    }
}
