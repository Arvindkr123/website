<?php
include("config.php");
$getStudents = $conn->prepare("SELECT * from students");
$getStudents->execute();
$students = $getStudents->fetchAll();
// echo "<pre>";
// print_r($students);
// echo "</pre>";
echo "<table border=1>";
foreach($students as $student){
    // echo "<tr>";
    // echo "<td>".$student['name']."</td>";
    // echo "</tr>";
    echo "<tr>
        <td>".$student['name']."</td>
        <td>".$student['course']."</td>
        <td>".$student['batch']."</td>
        <td>".$student['city']."</td>
    </tr>";
}
echo "</table>";

