<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наш сайт</title>
</head>
<body>
<header>
    <a href="{{ route('main') }}">Главная</a>
    <a href="{{ route('admin') }}">Панель администратора</a>
    <a href="{{ route('registration') }}">Регистрация</a>
    @guest()
        <a href="{{ route('login') }}">Войти</a>
    @endguest
    @auth()
        <a href="{{ route('logout') }}">Выйти</a>
    @endauth
    <hr>
</header>

@yield('content')
<footer>
</footer>
</body>
</html>
