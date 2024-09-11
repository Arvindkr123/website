<?php
$users = [
    "name",
    "email",
    "password",
    "game",
    "score"
];
// echo "<pre>";
// print_r($users);
// echo "</pre>";
array_push($users, "ram");
array_push($users, "kka");
array_push($users, "prag");
array_pop($users);
array_pop($users);
array_splice($users, -1);
print_r($users);
