<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <div>
        <form action="/" method="get" enctype="multipart/form-data">
            <label for="login">Введите логин</label>
            <input type="text" id="login" placeholder="Логин">
                    @error('loginOne')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
            <label for="email">Введите электронную почту</label>
            <input type="email" id="email">
                    @error('loginOne')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
            <label for="password">Введите пароль</label>
            <input type="password" id="password">
                    @error('loginOne')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
            <label for="confirm">Введите повторно пароль</label>
            <input type="password" id="confirm">
            @error('confirm')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
