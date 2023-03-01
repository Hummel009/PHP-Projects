<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Determine Data Types</title>
  </head>
  <body>
    <h1>Determine Data Types</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <label for="params">Enter a set of parameters:</label>
      <br>
      <textarea name="params" id="params" rows="5" cols="50"></textarea>
      <br>
      <input type="submit" value="Submit">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $params = $_POST["params"];
        $lines = explode("\n", $params);
        foreach ($lines as $line) {
          $line = trim($line);
          if (is_numeric($line)) {
            if (strpos($line, ".") !== false) {
              echo $line . " is a fractional number.<br>";
            } else {
              echo $line . " is an integer.<br>";
            }
          } else {
            echo $line . " is a string.<br>";
          }
        }
      }
    ?>
  </body>
</html>