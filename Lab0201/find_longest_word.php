<!DOCTYPE html>
<html>
<head>
  <title>Longest Word Finder</title>
</head>
<body>
  <h1>Longest Word Finder</h1>

  <?php
  $words = isset($_POST['words']) ? $_POST['words'] : '';

  if (empty($words)) {
    echo "<p>Please enter a list of words separated by spaces.</p>";
  } else {
    $wordList = explode(' ', $words);
    $longestWords = get_longest_words($wordList);

    if (count($longestWords) === 1) {
      echo "<p>The longest word is <strong>{$longestWords[0]}</strong>.</p>";
    } else {
      echo "<p>The longest words are:</p>";
      echo "<ul>";
      foreach ($longestWords as $word) {
        echo "<li>$word</li>";
      }
      echo "</ul>";
    }
  }

  function get_longest_words($wordList) {
    $maxLength = 0;
    $longestWords = array();

    foreach ($wordList as $word) {
      $length = strlen($word);
      if ($length > $maxLength) {
        $maxLength = $length;
        $longestWords = array($word);
      } elseif ($length === $maxLength) {
        $longestWords[] = $word;
      }
    }

    return $longestWords;
  }
  ?>

  <form method="post" action="">
    <label for="words">Enter a list of words (separated by spaces):</label>
    <input type="text" id="words" name="words" value="<?php echo $words; ?>">
    <button type="submit">Find Longest Word</button>
  </form>
</body>
</html>