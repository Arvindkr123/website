<?php
// print_r($_GET);
// print_r($_REQUEST['email']);
// print_r($_REQUEST['password']);

if ($_REQUEST) {
    foreach ($_REQUEST as $key => $data) {
        echo  $key . " is  " . $data . "<br>";
    }
}
