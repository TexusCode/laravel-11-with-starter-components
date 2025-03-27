<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('global.vite')
</head>

<body class="bg-green-500 w-screen h-screen flex justify-center items-center">
    <div class="p-10 rounded-3xl flex flex-col gap-3 bg-white">

        <h1 class="text-2xl text-black">Отправит данные Кассу магазина на сервер</h1>
        <form action="{{ route('posSendData') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-blue-500 py-3 rounded-2xl text-xl text-white">Отправить</button>
        </form>
        <h1 class="text-2xl text-black mt-10">Отправит данные Кассу заправку на сервер</h1>

        <form action="{{ route('azsSendData') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-orange-500 py-3 rounded-2xl text-xl text-white">Отправить</button>
        </form>
        <p class="text-gray-500 text-center">Толко данные последные 10 дней отправляются</p>
        <div>
            @if (session()->has('message'))
                <div class="bg-orange-200 p-5 rounded-2xl text-orange-700">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

</body>

</html>
