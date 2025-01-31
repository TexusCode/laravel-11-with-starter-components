<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/logo/Favicon Green.svg') }}" type="image/x-icon">
    <title>Texus.POS - {{ $title ?? "Управление продажами и товарами" }}</title>
    @include('global.vite')
</head>

<body>
    @livewire('test')
    <div class="grid w-screen min-h-screen p-4 lg:p-16 lg:grid-cols-2 2xl:grid-cols-3 bg-green-20">
        <div class="relative flex items-center justify-center p-6 bg-white lg:p-16 rounded-2xl">
            <form action="{{ route('loginpost') }}" method="POST" class="w-full max-w-96">
                @csrf
                <div class="flex justify-center mb-10">
                    <img src="{{ asset('assets/logo/Logo Green.svg') }}" alt="Logo" class="h-16">
                </div>
                <div>
                    <x-primary-text text="Войдите в систему, чтобы продолжить" class="text-center" />
                    <x-label-text text="Введите номер телефона и пароль от аккаунта или зарегистрируйтесь."
                        class="mt-4 text-center" />
                </div>
                <div class="mt-8">
                    <x-primary-input id="tel" value="{{ old('phone') }}" placeholder="Номер телефон (Ctrl+Enter)"
                        type="number" name="phone" focus="on" required="on"
                        icon="{{ asset('assets/icons/phone (1).svg') }}" />
                    <x-primary-input id="pass" value="{{ old('password') }}" placeholder="Пароль" type="password"
                        name="password" required="on" class="mt-4" icon="{{ asset('assets/icons/lock (1).svg') }}" />
                    <x-primary-button type="submit" class="mt-6" text="Войти" />
                    <x-primary-link text="Регистрация (Ctrl+R)" link="/register" color="green"
                        class="mt-3 text-center" />
                </div>
                @if($errors->any())
                <div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
                    <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
                    <div class="flex flex-col">
                        @foreach ($errors->all() as $message)
                        <p class="text-base text-red-500 font-ALSHaussBold">{{ $message }}</p>
                        @endforeach
                    </div>
                </div>
                @endif
                @if(session('message'))
                <div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
                    <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
                    <p class="text-base text-red-500 font-ALSHaussBold">{{ session('message') }}</p>
                </div>
                @endif
            </form>
        </div>
    </div>
    <div x-data x-init="
    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowUp') {
            event.preventDefault();
            document.getElementById('tel').focus();
        }
        if (event.key === 'ArrowDown') {
            event.preventDefault();
            document.getElementById('pass').focus();
        }
        if (event.ctrlKey && event.key === 'Enter') {
            event.preventDefault();
            document.getElementById('tel').focus();
        }
        if (event.ctrlKey && event.key === 'r') {
            event.preventDefault();
             window.location.href = '/register';
        }
    });">
    </div>
</body>

</html>