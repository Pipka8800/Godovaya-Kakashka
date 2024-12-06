<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome -->
    <link rel="stylesheet" href="modules/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/pages/login.css">
    <link rel="stylesheet" href="styles/settings.css">
    <link rel="icon" href="images/icon.png">
    <title>Новая Жизнь | Авторизация</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="glavn.html" class="header-link"><i class="fa fa-home"></i> На главную</a>
        </div>
    </header>
    <main>
        <section>
            <form class="login-form" action="api/authUser.php" method="POST">
                <h1 class="login-form-title">Авторизация</h1>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="example@mail.com">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password">
                <button type="submit">Войти</a></button>
                <a href="register.html">Регистрация</a>
            </form>
        </section>
    </main>
</body>
</html>