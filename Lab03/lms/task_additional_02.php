<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
    <?php
        if(isset($_POST['filename'])){
            // Get the name of the text file
            $filename = $_POST['filename'];

            // Read the contents of the text file into a string
            $contents = file_get_contents($filename);

            // Convert the contents to an array of lines and sort them
            $lines = explode("\n", $contents);
            sort($lines);

            // Join the sorted lines back into a string and write it back to the file
            $sortedContents = implode("\n", $lines);
            file_put_contents($filename, $sortedContents);

            echo "The file $filename has been sorted alphabetically.";
        }
    ?>

    <form method="POST">
        <label for="filename">Enter the name of the text file:</label><br>
        <input type="text" id="filename" name="filename"><br>
        <input type="submit" value="Sort">
    </form>
</body>
</html>