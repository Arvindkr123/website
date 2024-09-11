<?php
// $user = [
//     "name" => "arvind",
//     "email" => "thakurarvindkr10@gmail.com",
//     "phone" => "9315207665"
// ];
// $userJson = json_encode($user);
// print_r($user);
// echo $userJson;

$data = '{"name":"arvind", "email":"thakurarvindkr10@gmail.com", "phone":"9315207665"}';
$dataArray = json_decode($data, true);
print_r($dataArray);
