<?php
$users = [
    [1, "arvind", "thakurarvindkr10@gmail.com", "badaun"],
    [2, "rahul", "rahul@gmail.com", "badaun"],
    [3, "shayam", "shayam@gmail.com", "badaun"],
    [4, "tarun", "tarun@gmail.com", "badaun"],
];

// echo "<pre>";
// print_r($users);
// echo "</pre>";

for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo $users[$i][$j];
        echo "<br/>";
    }
}
