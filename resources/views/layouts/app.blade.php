<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop') - Laravel 电商教程</title>

    <!-- MDUI CSS -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css"
            integrity="sha384-2PJ2u4NYg6jCNNpv3i1hK9AoAqODy6CdiC+gYiL2DVx+ku5wzJMFNdE3RoWfBIRP"
            crossorigin="anonymous"
    />


    <!-- MDUI JavaScript -->
    <script
            src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js"
            integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+"
            crossorigin="anonymous"
    ></script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
{{--    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.0.0/core.js"></script>--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app" class="{{ route_class() }}-page">

            @include('layouts._header')
            <div class="container">
                @yield('content')
            </div>
            @include('layouts._footer')
        </div>
</body>
</html>
