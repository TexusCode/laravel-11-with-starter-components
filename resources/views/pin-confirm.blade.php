<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение PIN</title>
</head>
<body>
    <h1>Введите ваш PIN-код</h1>
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ url()->previous() }}">

        <label for="pin">PIN-код:</label>
        <input type="password" name="pin" id="pin" required>
        <button type="submit">Подтвердить</button>
    </form>
</body>
</html>
