<?php
// print_r($_FILES['uploadFile']);
if ($_FILES['uploadFile']) {
    $path = $_FILES['uploadFile']['name'];
    $uploads_path = "./uploads/" . $path;
    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploads_path)) {
        echo "File uploaded Successfully!";
    } else {
        die("failed to upload");
    };
}
