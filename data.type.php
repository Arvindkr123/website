<?php
$name = 'Arvind Kumar';
echo var_dump($name);
echo "<br/>";
$number = 100;
echo var_dump($number);
$floatnum = 10.10;
echo "<br/>";
echo var_dump($floatnum);

$bool = true;
echo "<br/>";
echo $bool;
echo "<br/>";
echo var_dump($bool);
$arr = ["ram thakur", "kunal kemu", "Tejasvi"];
echo "<br/>";
// echo $arr;
echo var_dump($arr);
$empty = null;
echo "<br/>";
echo var_dump($empty);

// $user = new className();
// echo var_dump($user);

$connection = ftp_connect("127.0.0.1") or die("local host not found");
echo var_dump($connection);
