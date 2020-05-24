<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css\animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\main.css') }}">
    <link rel="stylesheet" href="{{ asset('css\prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css\price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('css\price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.css') }}">
    <title>TecWeb | @yield('title', 'Home')</title>
</head>
<body>
    
    <header id="header">
        @include('layouts\_navpublic')
    </header>
</body>
</html>