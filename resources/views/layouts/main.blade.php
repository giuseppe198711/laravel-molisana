<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

   <!-- header-incluso -->
   @include('partials.header')
   <!-- header-incluso -->
<main>
  @yield('mainContent')
</main>
   <!-- footer-incluso -->
   @include('partials.footer')
   <!-- footer-incluso -->

   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
