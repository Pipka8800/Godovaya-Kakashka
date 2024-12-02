<?php

include_once './db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Получение данных из формы
    $formData = $_POST;
    //Поля, которые ожидаем от forData
    $fields = [
        'name', 
        'surname', 
        'email',
        'phone', 
        'password', 
        'agree'
    ];
    
    $errors = [];
    //Проверка + очистка данных
    // Проверка на пустоту
    foreach($fields as $idx => $field){
        if(!$formData[$field]){
            $errors[][$field] = 'Pole nada zapolnit';
        }
      }
    // Проверка правильнсти вводы пароля
    // Проверка уникальности

    // Валидация данных
    echo json_encode($errors);
} else {
    echo 'Запрос неверный';
}

?>