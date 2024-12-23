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
            <form action="{{ route('registerpost') }}" method="POST" class="w-full max-w-96">
                @csrf
                <div class="flex justify-center mb-10">
                    <img src="{{ asset('assets/logo/Logo Green.svg') }}" alt="Logo" class="h-16">
                </div>
                <div>
                    <x-primary-text text="Регистрация" class="text-center" />
                    <x-label-text
                        text="Оставьте заявку на регистрацию на платформе, и она будет отправлена администратору."
                        class="mt-4 text-center" />
                </div>
                <div class="mt-8">
                    <x-primary-input placeholder="Имя" type="text" value="{{ old('name') }}" name="name" focus="on"
                        id="name" required="on" icon="{{ asset('assets/icons/user.svg') }}" />

                    <x-primary-input placeholder="Номер телефон" value="{{ old('phone') }}" type="number" name="phone"
                        required="on" class="mt-4" icon="{{ asset('assets/icons/phone (1).svg') }}" />
                    <x-primary-input placeholder="Пароль" value="{{ old('password') }}" type="password" name="password"
                        required="on" class="mt-4" icon="{{ asset('assets/icons/lock (1).svg') }}" />

                    <x-primary-button type="submit" class="mt-6" text="Зарегистрировать" />
                    <x-primary-link text="Войти (Ctrl+L)" link="/login" color="green" class="mt-3 text-center" />

                </div>
                @include('admin.partials.message-session')
            </form>
        </div>
    </div>
    <div x-data x-init="
    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowUp') {
            event.preventDefault();
            document.getElementById('name').focus();
        }
        if (event.key === 'ArrowDown') {
            event.preventDefault();
            document.getElementById('pass').focus();
        }
        if (event.ctrlKey && event.key === 'Enter') {
            event.preventDefault();
            document.getElementById('name').focus();
        }
        if (event.ctrlKey && event.key === 'l') {
            event.preventDefault();
             window.location.href = '/login';
        }
    });">
    </div>

</body>

</html>