<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->

</head>

<body>

    @include('partials.header')
    <main>

        @yield('content')
        @include('pages.places')
        @include('pages.food')
        @include('pages.events')
        @include('pages.map')
    </main>

    @include('partials.footer')

</body>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="js/app.js"></script>

</html>