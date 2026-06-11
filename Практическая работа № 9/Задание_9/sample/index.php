<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 9 - Добавление данных в массив</title>
</head>
<body>

<h1>Задание 9</h1>
<h2>Добавление информации о новой группе</h2>

<?php
    // 1. Подключаем файл team.json
    include 'team.json';
    
    // 2. Декодируем значение переменной $team в ассоциативный массив PHP
    $teams = json_decode($team, true);
    
    // 3. Добавляем информацию о новой группе из файла Пикник.txt
    
    // Читаем файл Пикник.txt
    $picnicData = file_get_contents('Пикник.txt');
    
    // Разбираем данные (формат: ключ = значение)
    $newTeam = [];
    $lines = explode("\n", $picnicData);
    
    foreach ($lines as $line) {
        $line = trim($line);
        // Пропускаем пустые строки и строку-разделитель
        if (empty($line) || strpos($line, '===') !== false || strpos($line, 'Данные для добавления') !== false) {
            continue;
        }
        // Ищем строки вида "ключ = значение"
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $newTeam[trim($key)] = trim($value);
        }
    }
    
    // Добавляем новый ассоциативный массив в индексный массив $teams
    $teams[] = $newTeam;
    
    // 4. Выводим результат работы сценария в браузер
    echo "<h3>Результат добавления группы \"Пикник\":</h3>";
    echo "<pre>";
    print_r($teams);
    echo "</pre>";
?>

</body>
</html>