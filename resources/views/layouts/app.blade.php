<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @style(['background-color: #f5f8fa', 'font-family: Poppins']) >
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
