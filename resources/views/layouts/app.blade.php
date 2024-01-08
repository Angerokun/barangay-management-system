<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>e-Barangay Management System</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <link rel="stylesheet" id="css-main" href="{{ asset('css/dashmix.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        @include('layouts.sidebar')

        @include('layouts.header')
        <script src="{{ asset('js/dashmix.app.min.js') }}"></script>
        
        <main id="main-container">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
    @include('layouts.modal')
</body>
</html>
