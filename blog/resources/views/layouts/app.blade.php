<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials-laravel.header')
    <section>
        @yield('jumbothron')
    </section>
    <main>
        {{-- @yield('tipo-pasta') --}}
        @yield('container-prodotti')
        @yield('blogpost')
        @yield('prodotto-dettaglio')
    </main>
    @include('partials-laravel.footer')
</body>
</html>