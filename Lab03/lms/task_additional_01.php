<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
Example: 
[
    [1, 2, 3],
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [7, 8, 9]
]
    <form method="POST">
        <label for="array">Введите массив:</label><br>
        <textarea id="array" name="array"></textarea><br>
        <input type="submit" value="Remove Duplicates">
    </form>

    <?php
        if(isset($_POST['array'])){
            // Decode the JSON string into a PHP multidimensional array
            $array = json_decode($_POST['array'], true);

            // Remove duplicates using array_map(), serialize(), and array_unique()
            $uniqueArray = array_map('unserialize', array_unique(array_map('serialize', $array)));

            // Output the resulting unique array
            echo "<pre>";
            print_r($uniqueArray);
            echo "</pre>";
        }
    ?>
</body>
</html>