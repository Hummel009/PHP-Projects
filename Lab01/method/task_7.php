<!DOCTYPE html>
<html>
<head>
	<title>Array Manipulation</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h2>Array Manipulation Form</h2>
	<form action="array_manipulation.php" method="POST">
		<label for="data">Enter Data:</label><br>
		<label>Example: apple, banana, 2.56, 3.14, 4, 5.678, dog, cat, mouse, 6.78, 9.1, 10, elephant, giraffe, 1.99, 1.345, 13, 14, 15, turtle 
		</label>
		<textarea id="data" name="data" rows="10" cols="50"></textarea><br><br>
		<input type="submit" value="Process">
	</form>
</body>
</html>