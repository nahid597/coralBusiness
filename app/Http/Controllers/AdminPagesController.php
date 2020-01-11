<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\ProductImage;
use App\Admin;
use Image;

use Auth;

class AdminPagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     

    //
    public function index(){
        
        $user = Auth::user();
        $admin = Admin::where('email', $user->email)->first();

        if(!is_null($admin))
        {
            $products = Products::orderBy('id', 'desc')->get();
             return view('admin.index')->with('products', $products);
        }

        return view('pages.fail');

        
    }

    public function product_create(){

        $user = Auth::user();
        $admin = Admin::where('email', $user->email)->first();

        if(!is_null($admin))
        {
            return view('admin.pages.product.create');
        }

        return view('pages.fail');
    }

    public function product_edit($id)
    {

        $user = Auth::user();
        $admin = Admin::where('email', $user->email)->first();

        if(!is_null($admin))
        {
            $product = Products::find($id);
            return view('admin.pages.product.edit')->with('product', $product);
        }

        return view('pages.fail'); 
    }

    public function product_delete($id)
    {

        $user = Auth::user();
        $admin = Admin::where('email', $user->email)->first();

        if(!is_null($admin))
        {
            $product = Products::find($id);
        
            if(!is_null($product))
            {
                $product->delete();
            }
    
            session()->flash('success', 'Product delete successfully!!');
    
            return back();
        }

        return view('pages.fail'); 
    }

    public function product_store(Request $request)
    {

        $request->validate([
            'title'         => 'required|max:150',
            'description'     => 'required',
            'price'             => 'required|numeric',
            'quantity'             => 'required|numeric',
            'product_image'       =>'required',
        ]);

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


      // add multiple images

      if (count($request->product_image) > 0) {
        foreach ($request->product_image as $image) {
            //insert that image
            //$image = $request->file('product_image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/products/' .$img);
            Image::make($image)->save($location);
            $product_image = new ProductImage;
            $product_image->products_id = $product->id;
            $product_image->image = $img;
            $product_image->save();
        }
    }
      return redirect()->route('admin.index');
    }


    public function product_update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required|max:150',
            'description'     => 'required',
            'price'             => 'required|numeric',
            'quantity'             => 'required|numeric',
        ]);
        $product = Products::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('admin.index');
    }
}
