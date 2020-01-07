<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

class AdminPagesController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function product_create(){
        return view('admin.pages.product.create');
    }

    public function product_store(Request $request)
    {
      $product = new Products;

      $product->title = $request->title;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->quantity = $request->quantity;

      //$product->slug = str_slug($request->title);
      $len = strlen($product->title);
      $sub = str_split($product->title, $len-1);
      $newstr = substr_replace($product->title, '-', $len-1, 0);
      $product->slug = $newstr;
      $product->category_id = 1;
      $product->brand_id = 1;
      $product->admin_id = 1;
      $product->save();

      return redirect()->route('admin.index');
    }
}
