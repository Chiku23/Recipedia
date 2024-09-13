<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipedia</title>
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    </head>
    <body class="font-mono text-black bg-white">
        @include('components.header')

        <div class="main max-w-1140 mx-auto">
            @yield('content')
        </div>

        @include('components.footer')
        <script src="{{asset('js/frontendScripts.js')}}"></script>
    </body>
</html>