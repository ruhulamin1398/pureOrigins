<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>PureOrigins</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link rel="stylesheet" href="{{ asset("abasas/css/bootstrap.css") }}">
    <link rel="stylesheet" href="  {{ asset("abasas/css/fonts.css") }}">
    <link rel="stylesheet" href=" {{ asset("abasas/css/style.css") }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>

    @include('includes.nav')

    @yield('content')




    <script src="{{ asset("abasas/js/core.min.js") }} "></script>
    <script src="{{ asset("abasas/js/script.js") }} "></script>
    
    @include('includes.footer')
  </body>
</html>