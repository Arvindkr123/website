<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="enter user name">
    <br>
    <br>
    <button value='set' name='button'>set Session</button>
    <br>
    <br>
    <button value='get' name='button'>display Session</button>
    <br>
    <br>
    <button value='delete' name='button'>delete session</button>
    <br>
    <br>

</form>

<?php
session_start();
if (isset($_POST['button'])) {
    if ($_POST['button'] == 'set') {
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
        echo "Set session successfully!";
    }
    if ($_POST['button'] == 'get') {
        echo $_SESSION['user'];
    }
    if ($_POST['button'] == 'delete') {
        session_destroy();
    }
}
