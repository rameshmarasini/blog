<!doctype html>
<html lang="en">
  @include('Partials._head')
  <body>
    <!--default boostrap navbar-->
   @include('Partials._nav')

<div class="container">
  @yield('content')
</div><!--end of container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('Partials._footer')
  @include('Partials._Javascript')
  </body>
</html>
