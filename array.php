<?php
// $users = array("ram", "shayam", "jagan", "pawan");
$users = ["ram", "shayam", "pawan", "tarun"];
// echo $users[0];
// echo count($users);

for ($user = 0; $user < count($users); $user++) {
    echo "<h2 style='color:red'>" . $users[$user] . "</h2>";
}
