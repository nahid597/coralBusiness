 
@extends('layouts.master')

@section('content')
  <div class='container margin-top-20' id="contactPage" >
    <h2 style="color:purple"> Your Cart Items </h2>

    <div class="float-right" style="margin-bottom:50px">
        <a href="{{route('products')}}" class="btn btn-info"> Shopping Continue</a>
        <a href="{{route('checkouts')}}" class="btn btn-warning"> CheckOut</a>
    </div>
    <br>

    <table class="table table-bordered table-striped">
      <thead>
          <tr>
            <th>No.</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Quantity</th>
            <th>Unit Price</th>
            <th>Total Unit Price</th>
            <th>Delete</th>
          </tr>
      </thead>
      <tbody>

      @php
          $total_price = 0;
      @endphp

        @foreach(App\cart::totalCarts() as $cart)

         <tr>
                <td>{{$loop->index + 1}}</td>

                <td>{{$cart->product->title}}</td>
                <td>
                    @if($cart->product->images->count() > 0)
                      <img src="{{ asset('images/products/'. $cart->product->images->first()->image) }}" width="70px">
                    @endif
                </td>
                <td>
                    <form class="form-inline" action="{{ route('carts.update', $cart->id)}}" method = "post">
                        @csrf

                        <input type="number" name="product_quantity" class="form-control" value = "{{$cart->product_quantity}}"> 
                        <button type= "submit" class = "btn btn-info ml-2">update</button>
                    </form>
                </td>
                 
                 <td>
                    {{$cart->product->price}}
                 </td>
                 <td>
                    @php
                         $total_price += $cart->product->price * $cart->product_quantity;
                    @endphp
                    {{$cart->product->price * $cart->product_quantity }}
                 </td>

                <td>
                    <form class="form-inline" action="{{ route('carts.delete', $cart->id)}}" method = "post">
                        @csrf
                        <input type="hidden" name="cart_id" > 
                        <button type= "submit" class = "btn btn-danger">Delete</button>
                    </form>
                </td>
         </tr>
        @endforeach

        <tr>
           <td colspan="4"></td>
           <td><b>Total Price: </b></td>
           <td colspan="1">{{$total_price}} Taka</td>
        </tr>

      </tbody>
    </table>
    
  </div>
@endsection