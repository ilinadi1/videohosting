<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .btn{
            text-decoration: none;
            color:black;
            outline: none;
        }
    </style>
    @guest
    <button class="btn"><a href="/registr">Зарегистрироваться</a></button>
    <button class="btn"><a href="/auth">Войти</a></button>
    @endguest
    @auth
    <button class="btn"><a href="/logout">Выйти</a></button>
    @endauth
</body>
</html>
