<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Список компаний</title>
</head>
<body>
	<?php
	// Открываем файл с информацией о компаниях для чтения и записи
	$csv = fopen("companies.csv", "a+");

	// Получаем данные из формы
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$address = isset($_POST['address']) ? $_POST['address'] : '';
	$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';

	if ($name) {
		// Проверяем наличие компании в базе данных
		while ($row = fgetcsv($csv)) {
			if ($row[0] == $name) {
				echo "<p>Компания с таким названием уже существует в базе данных.</p>";
				exit;
			}
		}

		// Добавляем информацию о компании в файл
		fputcsv($csv, array($name, $address, $phone, $email));
	}

	// Закрываем файл с информацией о компаниях
	fclose($csv);

	// Открываем файл с информацией о компаниях для чтения
	$csv = fopen("companies.csv", "r");

	// Выводим информацию о компаниях
	echo "<h2>Список компаний:</h2>";

	echo '<form action="index.php" method="get">';
	echo '<input type="text" name="search" placeholder="Поиск по названию">';
	echo '<input type="submit" value="Найти">';
	echo '</form>';

	echo "<table>";
	echo "<tr><th>Название</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";

	while ($row = fgetcsv($csv)) {
		echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
	}

	echo "</table>";

	// Закрываем файл с информацией о компаниях
	fclose($csv);

	// Поиск по названию
	if (isset($_GET['search'])) {
		$search = $_GET['search'];
		$csv = fopen("companies.csv", "r");

		echo "<h2>Результаты поиска:</h2>";
		echo "<table>";
		echo "<tr><th>Название</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";

		while ($row = fgetcsv($csv)) {
			if (stripos($row[0], $search) !== false) {
				echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
			}
		}

		echo "</table>";

		// Закрываем файл с информацией о компаниях
fclose($csv);
}
?>

</body>
</html>