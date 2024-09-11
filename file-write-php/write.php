<?php
$fileName = './files/dummy.txt';
$content = "this is a dummy file";
$file = fopen($fileName, "w") or die('unable to create file');
fwrite($file, $content);
fclose($file);
echo "file created.";
