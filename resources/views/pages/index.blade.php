
@extends('layouts.master')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'coral1.jpg')}}"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'coral2.jpg')}}"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slideshow/'. 'coral3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <hr>

 <div style="margin-top:10px" class="container">
   <h4><b>About Coral: </b></h4>
  <p>
  Corals are marine invertebrates within the class Anthozoa of the phylum Cnidaria.<br>
    They typically live in compact colonies of many identical individual polyps.<br>
    Corals species include the important reef builders that inhabit tropical oceans and secrete calcium carbonate to form a hard skeleton
    <a href="https://en.wikipedia.org/wiki/Coral" target="blank"> know more</a>
  </p>
  
 </div>

 <br>
 <div style="margin-top:15px" class="container">
   <h4><b>product review: </b></h4>
   <br>
   <b>Coral 1:</b>
  <p>
     Coral is so much attractive. And site business is so much good.<br>
     I always try to buy new coral.
  </p>

  <b>Coral 2:</b>
  <p>
     Coral is so much attractive. And site business is so much good.<br>
     I always try to buy new coral.
  </p>
  
 </div>

 <br>


 <div class="row">
   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'coral1.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Coral 2</h5>
            <p class="card-text">
              Corals are marine invertebrates within the class Anthozoa of the phylum Cnidaria. <br>
              They typically live in compact colonies of many identical individual polyps. <br>
            </p>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'coral2.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Coral 1</h5>
            <p class="card-text">
              Corals are marine invertebrates within the class Anthozoa of the phylum Cnidaria. <br>
              They typically live in compact colonies of many identical individual polyps. <br>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="{{asset('images/slideshow/'. 'coral3.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Coral 3</h5>
            <p class="card-text">
              Corals are marine invertebrates within the class Anthozoa of the phylum Cnidaria. <br>
              They typically live in compact colonies of many identical individual polyps. <br>
            </p>
            <a href="{{route('products')}}" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>
 </div>
 


@endsection