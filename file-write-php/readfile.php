<form action="" method='post' enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <br>
    <br>
    <button>Read file</button>
</form>

<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $myFile = fopen($file, "r") or die('unable to read file');
    // echo fread($myFile, filesize($file));
    echo fread($myFile, filesize($_FILES['file']['tmp_name']));
    fclose($myFile); // Corrected variable name
}
