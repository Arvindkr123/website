<?php
include("config.php");
$getStudents = $conn->prepare("SELECT * from students");
$getStudents->execute();
$students = $getStudents->fetchAll();
print_r($students);
