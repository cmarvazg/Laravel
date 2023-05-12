<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Info 6')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    </head>
    @can(1)
    <body class="text-bg-secondary">
        <div>
            @include('fragments.nav-bar-admin')
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
    @endcan

    @can(2)
    <body class="text-bg-secondary">
        <div>
            @include('fragments.nav-bar-user')
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
    @endcan
</html>
