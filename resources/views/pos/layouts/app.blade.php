<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/logo/Favicon Green.svg') }}" type="image/x-icon">
    <title>Texus.POS - {{ $title ?? "Управление продажами и товарами" }}</title>
    @include('global.vite')
    @yield('styles')
</head>

<body>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>