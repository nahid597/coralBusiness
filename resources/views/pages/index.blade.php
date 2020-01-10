
@extends('layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">

      <div class="col-md-11">
        <div class="widget">
          <!-- <h3>Featured Products</h3> -->
          <div class="row">

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'coral2.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Coral</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-success">Add to cart</a>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection