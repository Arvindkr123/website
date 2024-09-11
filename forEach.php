<?php

$users = ["ram", "shayam", "pawan", "tarun"];
foreach ($users as $x) {
    // if ($x === 'shayam') {
    //     break;
    // }
    if ($x === 'shayam') {
        continue;
    }
    echo "<h2 style='color:yellow'>" . $x . "</h2>";
}

foreach ($users as $x):
    echo $x;
    echo "<br/>";
endforeach;
