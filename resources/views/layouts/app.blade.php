<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Begin360">

    {{-- SEO & Meta Management --}}
    <title>@yield('title', 'Begin360 | From Concept To Clarity')</title>
    <meta name="description" content="@yield('meta_description', 'Elite digital infrastructure and Odoo implementation.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Odoo, ERP, Digital Transformation')">
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('assets/images/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/site.webmanifest')}}" />

    @if(isset($is_private) && $is_private)
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index, follow">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script crossorigin="anonymous" defer src="https://kit.fontawesome.com/0b217c8a25.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @env('production')
        <!-- Insert Analytics/Production-only scripts here -->
    @endenv

    @stack('head')
    @stack('styles')
</head>
<body>
    <div class="cursor-dot"></div>
    <div class="cursor-glow"></div>

    {{-- <x-loader /> --}}
    <div id="main-body">
        <header>
            <x-header /> 
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <x-footer />
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
