<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipedia</title>
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/quill.min.css')}}">
        <script src="{{asset('js/lib/quilleditor.min.js')}}"> </script>
    </head>
    <body class="flex flex-col font-mono text-black bg-white min-h-screen">
        @include('components.header')

        <div class="main flex flex-grow w-full mx-auto max-w-1140 mx-auto">
            @yield('content')
        </div>

        @include('components.footer')
        @vite('resources/js/app.js')
        @vite('resources/js/frontendScript.js')
    </body>
</html>