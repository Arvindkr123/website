<?php
$userDetails = [
    "name" => "Arvind",
    "age" => 29,
    "city" => "delhi",
    "email" => "abc@gmail.com",
    "state" => "U.P"
];


foreach ($userDetails as $key => $data) {
    echo "key is " . $key . ":" . $data;
    echo "<br/>";
}
