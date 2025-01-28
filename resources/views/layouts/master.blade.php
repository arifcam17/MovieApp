<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MovieWatch - En İyi Filmleri Online İzle')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/MovieWatchLogo.ico') }}">


        <!-- Açıklama -->
        <meta name="description" content="@yield('description', 'MovieWatch ile en yeni filmleri, klasik başyapıtları ve popüler dizileri HD kalitede ücretsiz olarak izleyin. Film severler için tasarlanmış mükemmel bir platform.')">
        <!-- Anahtar Kelimeler -->
        <meta name="keywords" content="@yield('keywords', 'film izle, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu')">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Sayfaya Özel Style --}}
        <link rel="stylesheet" href="{{ asset('Icons/style.css') }}">
        @stack('styles')
    </head>
    <body class="bg-primary">
        {{-- Navbar --}}
        @include('layouts.header')
        @yield('content')

        @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- Sayfaya Özel Script --}}
        @stack('scripts')
    </body>
</html>
