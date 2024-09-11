<?php
$users = [
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
    [
        "name" => "arvind",
        "city" => "chandigarh",
        "email" => "thakurarvindkr10@gmail.com"
    ],
];

foreach ($users as $data) {
    foreach ($data as $key => $insideData) {
        echo $key . "<->" . $insideData;
        echo "<br/>";
    }
}
