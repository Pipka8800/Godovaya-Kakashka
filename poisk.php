<?php session_start();

include_once 'api/db.php';

$searchParams = $_GET;
$posts;
if(!empty($searchParams)){
    $animalType = $searchParams['animal-type'];
    $adress = $searchParams['adress'];

    $posts = $db->query("
    SELECT * FROM posts WHERE type_animal = '$animalType' OR adress = '$adress'
    ")->fetchAll();
    // echo json_encode($posts);
}
?>
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
            <form method="GET" action="poisk.php" class="search-form">
                <select name="animal-type" id="animal-type">
                    <option value="">Вид животного</option>
                    <option value="cat">Кошка</option>
                    <option value="dog">Собака</option>
                </select>
                <input name="adress" type="text" name="district" placeholder="Район">
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
                            <th>Ссылки</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Пример строки таблицы -->
                        <?php 
                            //вывод постов
                            if(!empty($posts)){
                            foreach($posts as $key => $value){
                                $type = $value['type_animal'];
                                $des = $value['description'];
                                $mark = $value['mark'];
                                $adress = $value['adress'];
                                $date = $value['date_found'];
                                $id = $value['id'];
                                echo"
                                    <tr>
                                        <td>$type</td>
                                        <td><img src='images/img/pit.jpg' alt='Фото животного'></td>
                                        <td>$des</td>
                                        <td>$mark</td>
                                        <td>$adress</td>
                                        <td>$date</td>
                                        <td><a href='info.php?id=$id'>Подробнее</a></td>
                                    </tr>
                                ";
                            }
                        }
                         ?>

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