@extends('layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">

      <div class="col-md-11">
        <div class="widget">
        <h3><b> Search Results </b></h3>
          <div class="row">

            @foreach ($products as $product)

              <div class="col-md-4">
                <div class="card">

                @php $i = 1; @endphp

                @foreach ($product->images as $image)
                    @if ($i > 0)
                        <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" alt="Card image" >
                    @endif

                    @php $i--; @endphp
                @endforeach

                  <div class="card-body">
                    <h4 class="card-title">
                      {{ $product->title }}
                    </h4>
                    <p class="card-text">{{$product->description}}</p>
                    <b class="card-text">Taka - {{ $product->price }}</b>
                    <br>
                    @include('partials.cart-button')
                  </div>
                </div>
              </div>

            @endforeach 

          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection