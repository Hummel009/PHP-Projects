<!DOCTYPE html>
<html>
<head>
  <title>Sum of Digits Calculator</title>
</head>
<body>
  <h1>Sum of Digits Calculator</h1>

  <?php
  $number = isset($_POST['number']) ? $_POST['number'] : '';

  if (!is_numeric($number)) {
    echo "<p>Invalid input. Please enter a valid number.</p>";
  } else {
    $sum = array_sum(str_split($number));
    echo "<p>The sum of the digits in $number is $sum.</p>";
  }
  ?>

  <form method="post" action="">
    <label for="number">Enter a number:</label>
    <input type="text" id="number" name="number" value="<?php echo $number; ?>">
    <button type="submit">Calculate</button>
  </form>
</body>
</html>