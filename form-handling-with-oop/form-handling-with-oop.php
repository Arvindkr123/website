<?php

if (isset($_POST['name'])) {
    class User
    {
        function getName($name)
        {
            echo "user name is $name";
        }
    }

    $user = new User();
    $user->getName($_POST['name']);
} else {
    echo "<form  method=post>
    <input type=text name=name placeholder=enter name..>
    <br><br>
    <button name='add'>add name</button>
</form>";
}
