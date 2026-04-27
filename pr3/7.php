<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>


    <?php
$discography = [
    [
        "id" => "1",
        "name" => "Atom Heart Mother",
        "date" => "10 октября 1970",
        "label" => ["EMI", "Harvest", "Capitol"],
        "format" => ["LP", "CD"],
        "status" => ["USA" => "Золотой"]
    ],
    [
        "id" => "2",
        "name" => "Meddle",
        "date" => "30 октября 1971",
        "label" => ["EMI", "Harvest", "Capitol"],
        "format" => ["Vinyl", "Кассета", "CD"],
        "status" => ["USA" => "Платиновый"]
    ],
    [
        "id" => "3",
        "name" => "Obscured by Clouds",
        "date" => "3 июня 1972",
        "label" => ["EMI", "Harvest", "Capitol"],
        "format" => ["LP", "Кассета", "CD"],
        "status" => ["USA" => "Золотой", "GBR" => "Серебряный"]
    ]
];

// Вывод многомерного массива
echo "<pre>";
print_r($discography);
echo "</pre>";
?>


	
</body>
</html>	