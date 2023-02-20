<!DOCTYPE html>
<html>
<head>
  <title>Display Multidimensional Array</title>
</head>
<body>
  <h1>Display Multidimensional Array</h1>

  <?php
  $data = isset($_POST['data']) ? $_POST['data'] : '';

  if (empty($data)) {
    echo "<p>Please enter a valid JSON string.</p>";
  } else {
    $array = json_decode($data, true);

    if (is_null($array)) {
      echo "<p>Please enter a valid JSON string.</p>";
    } else {
      echo "<h2>Array:</h2>";
      echo "<pre>";
      var_dump($array);
      echo "</pre>";

      echo "<h2>Display:</h2>";
      displayArray($array);
    }
  }

  function displayArray($array, $level = 0) {
    $colors = array('red', 'blue', 'green', 'purple', 'yellow');
    foreach ($array as $key => $value) {
      $color = isset($colors[$level]) ? $colors[$level] : 'black';
      echo "<div style='color: $color;'>$key:</div>";

      if (is_array($value)) {
        displayArray($value, $level + 1);
      } else {
        echo "<div style='color: $color; padding-left: 20px;'>$value</div>";
      }
    }
  }
  ?>

  <form method="post" action="">
    <label for="data">Enter a JSON string:</label>
    <textarea id="data" name="data"><?php echo $data; ?></textarea>
    <button type="submit">Display Multidimensional Array</button>
  </form>
</body>
</html>