<!DOCTYPE html>
<html>
<head>
  <title>Determine Data Types</title>
</head>
<body>
  <h1>Determine Data Types</h1>

  <?php
  $values = isset($_POST['values']) ? $_POST['values'] : '';

  if (empty($values)) {
    echo "<p>Please enter a set of values separated by commas.</p>";
  } else {
    $valueList = explode(',', $values);

    echo "<p>The data types of the input values are:</p>";
    echo "<ul>";
    foreach ($valueList as $value) {
      $type = gettype($value);
      echo "<li>$value - $type</li>";
    }
    echo "</ul>";
  }
  ?>

  <form method="post" action="">
    <label for="values">Enter a set of values (separated by commas):</label>
    <input type="text" id="values" name="values" value="<?php echo $values; ?>">
    <button type="submit">Determine Data Types</button>
  </form>
</body>
</html>