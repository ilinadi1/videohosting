<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <div>
        <form action="/" method="get" enctype="multipart/form-data">
            <label for="email">Введите электронную почту</label>
            <input type="email" id="email">
            @error('email')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
            <label for="password">Введите пароль</label>
            <input type="password" id="password">
            @error('password')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
            @enderror
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
