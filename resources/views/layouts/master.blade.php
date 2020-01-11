<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to CoralBusiness</title>

  @include('partials.styles')
  <script src="{{ asset('js/slideshow/slideshow.js') }}"> </script>
</head>
<body>
<script src="{{ asset('js/slideshow/slideshow.js') }}"> </script>
  <div class="wrapper">

    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

  </div>


  @include('partials.scripts')
  </body>
</html>