
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @include('libraries.styles')


  </head>
  <body>

 @include('components.nav')

     <div class="container">
      <div class="row mt-5">

        <div class="col-md-3">
            @include('components.left-side-bar')
        </div>

        <div class="col-md-6">

            @yield('content')

        </div>

        <div class="col-md-3">
            @include('components.right-side-bar')
        </div>

      </div>
     </div>

     @include('components.footer')
    @include('libraries.scripts')
  </body>
</html>

