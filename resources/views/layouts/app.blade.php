<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ClearFlow Plumbing & Heating')</title>
    <meta name="description" content="@yield('meta_description', 'Reliable plumbing services across Manchester. 24/7 callouts, transparent pricing and guaranteed workmanship.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index,follow">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'ClearFlow Plumbing & Heating')">
    <meta property="og:description" content="@yield('meta_description', 'Reliable plumbing services across Manchester.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/ClearFlow.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    @stack('head')
</head>
<body>

@include('partials.navbar')

<main>
    @yield('content')
</main>

@include('partials.footer')

@stack('jsonld')

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, once: true, offset: 80 });
</script>

@stack('scripts')
</body>
</html>