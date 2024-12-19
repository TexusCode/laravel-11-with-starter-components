<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Texus.POS - {{ $title ?? "Управление продажами и товарами" }}</title>


    @include('global.vite')
</head>
<body>
    <div class="grid w-screen h-screen p-4 lg:p-16 lg:grid-cols-2 bg-green-30">
        <div class="relative flex items-center justify-center p-6 bg-white lg:p-16 rounded-2xl">
            <form action="{{ route('registerpost') }}" method="POST" class="w-full">
                @csrf
                <div>
                    <x-primary-text text="Регистрация" class="text-center" />
                    <x-label-text text="Оставьте заявку на регистрацию на платформе, и она будет отправлена администратору." class="mt-4 text-center" />
                </div>
                <div class="mt-8">
                    <x-primary-input placeholder="Имя" type="text" name="name" focus="on" required="on" icon="{{ asset('assets/icons/user.svg') }}" />
                    <x-primary-input placeholder="Номер телефон" type="number" name="phone" required="on" class="mt-4" icon="{{ asset('assets/icons/phone (1).svg') }}" />
                    <x-primary-input placeholder="Пароль" type="password" name="password" required="on" class="mt-4" icon="{{ asset('assets/icons/lock (1).svg') }}" />
                    <x-primary-button type="submit" class="mt-6" text="Зарегистрировать" />

                    <x-primary-link text="Войти" link="/login" color="green" class="mt-3 text-center" />
                </div>
                @if(session('message'))
                <div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
                    <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
                    <p class="text-base text-red-500 font-ALSHaussBold">{{ session('message') }}</p>
                </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>
