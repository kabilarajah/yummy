<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('title')</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/app.css')}}">

    @yield('styles')
  </head>


  
  <body>

  <div class="container">
    @yield('content')

  </div>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    @yield('scripts')
  </body>
</html>