<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisor</title>
    @include('global.vite')
</head>
<body class="relative">
    <form action="{{route('logout')}}" method="POST" class="fixed bottom-5 left-0 w-full flex justify-center">
        @csrf
        <button type="submit" class="bg-white text-xl uppercase font-bold text-green-20 px-5 py-2 rounded-xl">
            Выйти из аккаунта
        </button>

    </form>
    <div class="w-screen h-screen bg-green-20 flex flex-col justify-center items-center">
        <h1 class="text-white text-2xl text-center mb-5">Добро пожаловать <br> {{Auth::user()->name}}</h1>
        @yield('content')
    </div>

</body>
</html>