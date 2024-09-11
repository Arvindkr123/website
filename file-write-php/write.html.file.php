<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write File in PHP</title>
</head>

<body>
    <form action="" method='post'>
        <input type="text" name="filename" id="filename" placeholder="enter file name">
        <br>
        <br>
        <textarea name="content" id="content"></textarea>
        <br>
        <br>
        <button>create a file</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['filename'])) {
    $filename = "./files/" . $_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($filename, "w") or die("unable to create file");
    fwrite($file, $content);
    fclose($file);
    echo "file created.";
}
