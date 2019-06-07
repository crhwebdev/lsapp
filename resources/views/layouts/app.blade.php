<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Add query string and echo of current time to app.css file to force Apache cache reset --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}?<?php echo date('l jS \of F Y h:i:s A'); ?>">
        <title>{{config('app.name', 'LSAPP')}}</title>
    
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
          @yield('content')
      </div>
      
    </body>
</html>