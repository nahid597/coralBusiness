
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbarColor">
  <div class="container">


    <a  class="navbar-brand" style="color:purple; margin-bottom:5px;" href="{{route('index')}}">coralBusiness</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('products')}}">Products <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{route('contact')}}">contact us <span class="sr-only">(current)</span></a>
        </li>

        <li>
            <form class="form-inline my-2 my-lg-0" action= "{!! route('search') !!}" method="get()">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>

          </form>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
        <li>
           <a href="{{route('carts')}}">
            <button class="btn btn-warning" type="submit"><i class="fa fa-cart-plus"></i>
             <span class="badge badge-warning">
                <h6>{{App\cart::totalItems()}}</h6>
             </span>

            </button>
           </a>
        </li>
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                      <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                          </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                        </div>
                    </li>
              @endguest

              
      </ul>
     
      
    </div>
  </div>
</nav>
<!-- End Navbar Part -->