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
    foreach($formData as $key => $value){
        $formData[$key] = $value;
    }

    // Проверка на существование ключа + пустота значения
    foreach($fields as $idx => $field){
        //проверка на существование ключа
        if(array_key_exists($field, $formData)){
            // Проверка на пустоту значения
            if($formData[$field]){
                //если дошли сюда, выходим из цикла, чтобы ошибка не записалась
            continue;
        }
        
      }
      // Дописать проверку на пустоту значения
        $errors[][$field] = 'Pole nada zapolnit';
    }
    // Проверка правильнсти вводы пароля
    // Проверка уникальности

    // Валидация данных
    echo json_encode($errors);
} else {
    echo 'Запрос неверный';
}

?>