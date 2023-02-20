<!DOCTYPE html>
<html>
<head>
	<title>Display Multidimensional Array</title>
	<style>
		.red { color: red; }
		.blue { color: blue; }
		.green { color: green; }
		.purple { color: purple; }
		.yellow { color: yellow; }
	</style>
</head>
<body>

<?php
// Define a multidimensional array
$multiArray = array(
	"red" => array(
		"blue" => array(
			"green" => array(
				"purple" => array(
					"yellow" => "This is the deepest level"
				)
			)
		)
	)
);

// Recursive function to display the array elements with different colors based on the array level
function displayArray($array, $level = 1) {
	foreach($array as $key => $value) {
		$class = "";
		switch($level) {
			case 1: $class = "red"; break;
			case 2: $class = "blue"; break;
			case 3: $class = "green"; break;
			case 4: $class = "purple"; break;
			default: $class = "yellow"; break;
		}

		if (is_array($value)) {
			echo "<span class=\"$class\">$key:</span><br/>";
			displayArray($value, $level + 1);
		} else {
			echo "<span class=\"$class\">$key:</span> $value<br/>";
		}
	}
}

// Call the function to display the multidimensional array
displayArray($multiArray);
?>

</body>
</html>