<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Sidebar --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('sidebar/css/style.css') }}">
</head>

<body>
    <div id="app">

        {{-- @include('layouts.sidebar') --}}
        @include('layouts.sidebar_new')

        {{-- @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main> --}}
    </div>

    {{-- Sidebar --}}
    <script src="{{ asset('sidebar/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sidebar/js/popper.js') }}"></script>
    <script src="{{ asset('sidebar/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sidebar/js/main.js') }}"></script>
</body>

</html>
