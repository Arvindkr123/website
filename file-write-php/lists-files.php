<?php
$path = "files";
$items = scandir($path);

$items = array_diff($items, array(".", ".."));
foreach ($items as $data) {
    echo "<a href=./files/$data>$data</a>";
    echo "<br/>";
}
