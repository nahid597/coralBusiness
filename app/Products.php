<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    // protected $fillable = [
    //     'title'
    // ];

    public function images(){
        return $this->hasMany('App\ProductImage');
    }
}
