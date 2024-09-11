<?php
include("config.php");
$id = $_GET['id'];
$student = $conn->prepare("Select * from students where id=$id");
$student->execute();
$student = $student->fetch();

$name = $student['name'];
$course = $student['course'];
$batch = $student['batch'];
$year = $student['year'];
$city = $student['city'];

?>

<form action="" method='post'>
    <input type="text" name="name" value="<?php echo $name?>">
    <br>
    <br>
    <input type="text" name="course" value="<?php echo $course?>">
    <br>
    <br>
    <input type="text" name="year" value="<?php echo $year?>">
    <br>
    <br>
    <input type="text" name="city" value="<?php echo $city?>">
    <br>
    <br>
    <input type="text" name="batch" value="<?php echo $batch?>">
    <br> 
    <br>
    <button value="<?php echo $id?>" name='update'>update student</button>
</form>
