<?php
include("config.php");
$students = $conn->prepare("SELECT id, name FROM students");
$students->execute();
$studentData = $students->fetchAll();
// echo "<pre>";
// print_r($studentData);
// echo "<pre>";

echo "<select>";
foreach($studentData as $student){
    echo "<option value='".$student['name']."'>".$student['name']."</option>";
}
echo "</select>";

