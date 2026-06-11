<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 8 - Декодирование JSON</title>
</head>
<body>

<h1>Задание 8</h1>
<h2>Декодирование JSON из файла team.txt</h2>

<?php
    // 1. Подключаем файл team.txt
    include 'team.txt';
    
    // 2. Декодируем значение переменной $team в массив объектов PHP
    $teams = json_decode($team);
    
    // 3. Выводим результат декодирования в браузер
    echo "<h3>Результат декодирования:</h3>";
    echo "<pre>";
    print_r($teams);
    echo "</pre>";
?>

</body>
</html>