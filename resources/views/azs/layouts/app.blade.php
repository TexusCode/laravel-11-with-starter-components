<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Стили для спиннера */
        .spinner {
            display: none;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left-color: #000;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .hidden {
            display: none;
        }
    </style>
    @yield('styles')

    @include('global.vite')
</head>
<body class="[&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-gray-700 [&::-webkit-scrollbar-thumb]:bg-white">
  @livewire('fuel-price')

    @yield('content')

    @yield('scripts')
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            // Находим кнопку и спиннер
            var submitBtn = document.getElementById('submitBtn');
            var spinner = document.getElementById('spinner');

            // Отключаем кнопку
            submitBtn.disabled = true;
            // Скрываем текст кнопки и показываем спиннер
            submitBtn.classList.add('hidden');
            spinner.style.display = 'inline-block';

            // Разрешаем отправку формы
        });
    </script>
    <script>
        document.getElementById('myForm2').addEventListener('submit', function(event) {
            // Находим кнопку и спиннер
            var submitBtn = document.getElementById('submitBtn2');
            var spinner = document.getElementById('spinner2');

            // Отключаем кнопку
            submitBtn.disabled = true;
            // Скрываем текст кнопки и показываем спиннер
            submitBtn.classList.add('hidden');
            spinner.style.display = 'inline-block';

            // Разрешаем отправку формы
        });
    </script>
</body>
</html>
