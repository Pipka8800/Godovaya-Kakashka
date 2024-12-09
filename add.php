<?php session_start();

//Проверка на аутентификацию
include_once ('api/db.php');

if(array_key_exists('token', $_SESSION)){
    //Если токен есть, то проверяем его в базе данных
    $token = $_SESSION['token'];
    $userId = $db->query("
    SELECT id FROM users WHERE api_token = '$token'
    ")->fetchAll();

    if(empty($userId)){
        //Удаление токена из сессии
        unset($_SESSION['token']);
        header('Location: login.php');
    }
    
} else{
    //Если токена нет, то перекидываем на главную
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font awesome -->
         <link rel="stylesheet" href="modules/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="styles/pages/add.css">
        <link rel="stylesheet" href="styles/settings.css">
        <link rel="icon" href="images/icon.png">
        <title>Новая Жизнь | Новое объявление</title>
    </head>
<body>
    
    <header class="header">
        <div class="container">
            <a href="glavn.php" class="header-link"><i class="fa fa-home"></i> На главную</a>
        </div>
    </header>

<main>
    <section class="add">
        <div class="container">
            <form>
                <label for="phone">Номер телефона</label>
                <input type="tel" name="phone" id="phone" placeholder="Введите номер телефона">
                <label for="email">Почта</label>
                <input type="email" name="email" id="email" placeholder="Введите email">
                <select name="type" id="type">
                    <option value="cat">Кот</option>
                    <option value="dog">Собака</option>
                </select>
                <label for="photo">Фотография животного</label>
                <input type="file" name="photo" id="photo">
                <label for="desc">Доп. инфа</label>
                <textarea name="desc" id="desc"></textarea>
                <label for="mark">Клеймо (если есть)</label>
                <input type="text" name="mark" id="mark">
                <select name="place" id="place">
                    <option value="0">Кировский</option>
                    <option value="1">Центр</option>
                </select>
                <label for="date">Дата</label>
                <input type="date" name="date" id="date">
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree">
                    Согласие на обработку персональных данных
                </label>
            </form>
        </div>
    </section>
</main>
</body>
</html>