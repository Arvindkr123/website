<?php 
include("config.php");

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $students = $conn->prepare("Delete from students where id='$id'");

    if($students->execute()){
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }else{
        header('Location: ' . $_SERVER['PHP_SELF'] . '?error=failed_deletion');
        exit;
    }
}

$students = $conn->prepare("SELECT * FROM students");
$students->execute();
$studentsData = $students->fetchAll();
echo "<table border=1>";
foreach($studentsData as $student){
    echo "<tr>
       <td>". $student['id'] ."</td>
       <td>". $student['name'] ."</td>
       <td>". $student['course'] ."</td>
       <td>". $student['city'] ."</td>
       <td>". $student['batch'] ."</td>
       <td>
       <form method=post>
       <button name=delete value=".$student['id'].">delete</button>
       </form>
       </td>
       <td>
       <a href='update.php?id=".$student['id']."'>edit</a>
       </td>
    </tr>";
}
echo "</table>";


