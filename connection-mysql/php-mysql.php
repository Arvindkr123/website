<?php
$host = 'localhost';
$userName = 'root';
$password = null;
$database = 'college';

$conn = new mysqli($host, $userName, $password, $database);
if ($conn->connect_error) {
    die('some error' . $conn->connect_error);
}

echo "connection success";
echo "<br/>";
$result = $conn->query("show tables")->fetch_all();
print_r($result);
