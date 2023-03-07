<!DOCTYPE html>
<html>
<head>
	<title>Форма для Apache</title>
</head>
<body>
	<form method="get" action="">
		<label for="text">Введите текст:</label><br>
		<input type="text" name="text" id="text"><br>
		<input type="submit" value="Отправить">
	</form>

	<?php
		if (isset($_GET['text'])) {
			$text = $_GET['text'];
			$words = explode(' ', $text);
			$count = 0;

			foreach ($words as $word) {
				$count++;

				if ($count % 3 == 0) {
					$word = strtoupper($word);
				}

				$letters = str_split($word);
				$i = 0;

				foreach ($letters as $letter) {
					$i++;

					if ($i % 3 == 0) {
						echo "<span style='color:purple;'>$letter</span>";
					} else {
						echo $letter;
					}
				}

				echo ' ';
			}
		}
	?>
</body>
</html>