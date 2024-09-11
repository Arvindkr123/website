<form action="" method="post">
    <input type="text" name="name" placeholder="enter name">
    <br><br>
    <input type="text" name="course" placeholder="enter course">
    <br><br>
    <input type="text" name="batch" placeholder="enter batch">
    <br><br>
    <input type="text" name="year" placeholder="enter year">
    <br><br>
    <input type="text" name="city" placeholder="enter city">
    <br><br>
    <button>add new Student</button>
</form>


<?php
if (isset($_POST['name'])) {
    include("./config.php");
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $course = $_POST['course'];

    // Prepare the SQL query with parameterized values
    $studentQuery = $conn->prepare("INSERT INTO `students` (`id`, `name`, `batch`, `course`, `city`, `year`) VALUES (NULL, :name, :batch, :course, :city, :year)");

    // Bind the parameters
    $studentQuery->bindParam(':name', $name);
    $studentQuery->bindParam(':batch', $batch);
    $studentQuery->bindParam(':course', $course);
    $studentQuery->bindParam(':city', $city);
    $studentQuery->bindParam(':year', $year);

    // Execute the query
    if ($studentQuery->execute()) {
        echo "<br/>";
        echo "Data inserted successfully";
    } else {
        echo "Data insertion failed! " . $studentQuery->errorInfo()[2];
    }
}
?>