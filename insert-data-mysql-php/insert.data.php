<?php
include("./config.php");

// $studentQuery = $conn->prepare("INSERT INTO `students` (`id`, `name`, `batch`, `course`, `city`, `year`) VALUES (NULL, 'viki', 'evening', 'b.tech','gurgaon', '1')") ;
// $result = $studentQuery->execute();


$studentQuery = $conn->prepare("INSERT INTO `students` (`id`, `name`, `batch`, `course`, `city`, `year`) VALUES (NULL, :name, :batch, :course, :city, :year)");

$name = 'viki';
$batch = 'evening';
$course = 'b.tech';
$city = 'gurgaon';
$year = '1';

$studentQuery->bindParam(':name', $name);
$studentQuery->bindParam(':batch', $batch);
$studentQuery->bindParam(':course', $course);
$studentQuery->bindParam(':city', $city);
$studentQuery->bindParam(':year', $year);

$result = $studentQuery->execute();

if($result){
    echo "Data inserted success";
}else{
    echo "data insertion failed!";
}