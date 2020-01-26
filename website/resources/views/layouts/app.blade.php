<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BoomerShop') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles');
</head>
<body>

    <header>
        {{-- Hier komt de header stuff --}}
    </header>

    <main>
        {{-- Hier komt de website contents --}}
        @yield('content')
    </main>

    <footer>
        {{-- Hier komt de footer stuff --}}
    </footer>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
    @yield('scripts');
    <script>
        function logout () {
            event.preventDefault()
            document.querySelector('#logout-form').submit()
        }
    </script>
</html>
