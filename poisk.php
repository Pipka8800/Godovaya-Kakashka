<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск животных</title>
    <link rel="stylesheet" href="styles/pages/poisk.css">
    <link rel="icon" href="images/icon.png">
</head>
<body>
    <main>
        <!-- Форма поиска -->
        <section class="search-section">
            <form class="search-form">
                <select name="animal-type" id="animal-type">
                    <option value="">Вид животного</option>
                    <option value="cat">Кошка</option>
                    <option value="dog">Собака</option>
                </select>
                <input type="text" name="district" placeholder="Район">
                <button type="submit">Найти</button>
            </form>
        </section>

        <!-- Таблица с результатами -->
        <section class="results-section">
            <div class="table-wrapper">
                <table class="results-table">
                    <thead>
                        <tr>
                            <th>Вид животного</th>
                            <th>Фото</th>
                            <th>Описание</th>
                            <th>Клеймо</th>
                            <th>Район</th>
                            <th>Дата находки</th>
                            <th>Контакты</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Пример строки таблицы -->
                        <tr>
                            <td>Кошка</td>
                            <td><img src="images/img/pit.jpg" alt="Фото животного"></td>
                            <td>Найдена в парке, ласковая</td>
                            <td>A123</td>
                            <td>Центральный</td>
                            <td>01.03.2024</td>
                            <td>+7 (999) 123-45-67</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Пагинация -->
        <section class="pagination">
            <button class="pagination-btn">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">...</button>
        </section>
    </main>
</body>
</html>