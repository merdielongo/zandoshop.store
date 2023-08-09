<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Zandoshop - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="ztech243">
    <meta name="website" content="https://zandoshop.store">
    <meta name="email" content="support@zandoshop.store">
    <meta name="version" content="1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon.png') }}">

    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    @include('includes.navbar')

    @include('includes.wishlist')

    @yield('content')

    @include('includes.footer')

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>
</html>
