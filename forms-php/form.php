<?php
if (isset($_POST)) {
    echo 'user name is ' . $_POST['name'] . "<br/>";
    echo 'user email is ' . $_POST['email'] . "<br/>";
    echo 'user password is ' . $_POST['password'] . "<br/>";
    echo 'user skills are ' . implode(",", $_POST['skills']) . "<br/>";
    echo 'user gender are ' . $_POST['gender'] . "<br/>";
    echo 'user city are ' . $_POST['city'] . "<br/>";
    echo 'user city are ' . $_POST['bio'] . "<br/>";
}
