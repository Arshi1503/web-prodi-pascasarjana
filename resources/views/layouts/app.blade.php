<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="author" content="ThemeZaa">
    <meta name="description" content="Elevate your online presence with Crafto - ABI Website.">

    <title>@yield('title', 'Administrasi Bisnis')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/Iwu.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('demos/finance/finance.css') }}" />

    @stack('styles')
</head>
<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#bc8947" class="custom-cursor">

    @include('partials.navbar') {{-- kalau ada navbar --}}

    <main>
        @yield('content')
    </main>

    @include('partials.footer') {{-- kalau ada footer --}}

    <!-- Scripts -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    @stack('scripts')
    @vite(['resources/js/app.js'])

    {{-- Scroll script --}}
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>    
    </div>
    {{-- Scroll script end --}}
</body>
</html>
