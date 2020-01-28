<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="">
    <title>BoomerShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>

    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
    @yield('scripts')
    <script>
        function logout () {
            event.preventDefault()
            document.querySelector('#logout-form').submit()
        }
    </script>
</html>
