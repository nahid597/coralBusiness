 
@extends('layouts.master')

@section('content')
  <div class='container margin-top-20' id="contactPage" >
     
   <div class="card card-body">

       <div class="row">
          <div class="col col-md-6">
            <h2 style = "color:green">confirm items </h2>
                <br>
                @foreach(App\cart::totalCarts() as $cart)
                    <b>
                        <p> 
                            {{$cart->product->title}} - 
                            <strong>{{$cart->product->price}} Taka</strong> -
                            {{$cart->product_quantity}}  items
                        </p>
                    </b>
                @endforeach
                
                <b> 
                   <a href="{{route('carts')}}" class="btn btn-primary"> change cart items</a>
                </b>
          </div>
        
         <div class="col col-md-5">
            @php
                $tatal_price = 0;
            @endphp

            @foreach(App\cart::totalCarts() as $cart)
                @php
                    $tatal_price += $cart->product->price * $cart->product_quantity;
                @endphp     
            @endforeach
           <b>Total Price: {{$tatal_price}} Taka</b>
           <br>
           <b>Total Price with shipping cost: {{$tatal_price + App\setting::first()->shipping_cost}} Taka</b>

         </div>
                
       </div>
            
    </div>

    <div class="card card-body">
        <h4>
          <b style="color:purple">Shipping Address</b>
        </h4>
        <br>
         
         <div class="row">
             <div class="col col-md-2">
             </div>

             <div class="col col-md-8">
                <form action = "{{route('order.success')}}">
                     <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputName"> <b>Receiver Name:</b> </label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{Auth::check() ? Auth::user()->name: ''}}">
                    </div>
                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputEmail1"> <b>Email address:</b> </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::check() ? Auth::user()->email : ''}}">
                    </div>

                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputPhone"> <b>Phone:</b> </label>
                        <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" value="{{Auth::check() ? Auth::user()->phone : ''}}">
                    </div>
                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputAddress"> <b>Address:</b> </label>
                        <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="{{Auth::check() ? Auth::user()->shipping_address : ''}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>

             </div>

             <div class="col col-md-2">
             </div>
         </div>
       
    </div>

  </div>
@endsection