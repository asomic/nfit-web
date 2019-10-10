<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>NFIT</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css?ver=1.1">
  </head>
  <body class="font-principal bg-nfit-body text-white w-full overflow-x-hidden">
    <main class="w-full">

      {{-- Header --}}
      @include('layouts.header')

      @yield('home')

      {{-- Footer --}}
      @include('layouts.footer')

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
  </body>
</html>
