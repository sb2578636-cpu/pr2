<?php
	// подключаем файл educations.php
	require 'educations.php';
	
	// кодируем данные массива $educations в JSON представление
	$json_data = json_encode($educations);
	
	// кодируем JSON для передачи в URL
	$encoded_json = urlencode($json_data);
	
	// выводим ссылку для передачи данных на сервер
	echo '<a href="server.php?data=' . $encoded_json . '">Передать данные на сервер</a>';
?>