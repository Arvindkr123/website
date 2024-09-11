<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="enter user name">
    <br>
    <br>
    <button value='set-cookie' name='button'>set Cookie</button>
    <br>
    <br>
    <button value='display-cookie' name='button'>display Cookie</button>
    <br>
    <br>
    <button value='delete-cookie' name='button'>delete Cookie</button>
    <br>
    <br>

</form>

<?php
if (isset($_POST)) {
    if ($_POST['button'] === 'set-cookie') {
        $val = $_POST['user'];
        // echo $val;
        setcookie("user", $val);
        echo "cookie set successfully!";
    }

    if ($_POST['button'] == 'display-cookie') {
        if (isset($_COOKIE['user'])) {
            echo $_COOKIE['user'];
        }
    }
    if ($_POST['button'] == 'delete-cookie') {
        if (isset($_COOKIE['user'])) {
            setcookie('user', '', -1);
        }
    }
}
