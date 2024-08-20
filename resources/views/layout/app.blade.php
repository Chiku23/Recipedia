<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipedia</title>
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    </head>
    <body class="font-mono text-black bg-white">
        @include('components.header')

        <div class="main max-w-1140 mx-auto">
            @yield('content')
        </div>

        @include('components.footer')
    </body>
</html>