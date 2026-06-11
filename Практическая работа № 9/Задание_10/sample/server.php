<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>JSON формат</title>
</head>
<body>
	<h1>JSON формат</h1>
	<h2>Информация, полученная из строки JSON GET-параметра</h2>
	
	<?php
		// получаем данные из GET-параметра
		$json_data = isset($_GET['data']) ? $_GET['data'] : '';
		
		// декодируем JSON обратно в массив
		$decoded_array = json_decode($json_data, true);
		
		// выводим результат в браузер
		echo "<pre>";
		print_r($decoded_array);
		echo "</pre>";
	?>
</body>
</html>