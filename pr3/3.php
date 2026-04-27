<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

    <?php
$user = [
    'surname' => 'Лаврецкая',
    'name' => 'Елизавета',
    'patronymic' => 'Викторовна',
    'login' => 'elizaveta',
    'password' => '12345',
    'email' => 'lovel@mail.ru'
];

echo "<h3>Вы успешно зарегистрированы на сайте</h3>";

echo "<b>" . $user['surname'] . " " . $user['name'] . " " . $user['patronymic'] . "</b><br><br>";

echo "Логин: " . $user['login'] . "<br><br>";
echo "E-mail: " . $user['email'] . "<br><br>";
echo "Пароль: " . $user['password'];
?>



	
</body>
</html>	