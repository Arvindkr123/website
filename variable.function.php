<?php
// function test()
// {
//     echo "Hello World";
//     echo "<br/>";
// }

// $result = "test";
// $result();
// echo $result();

// function take the function as callback

function apple()
{
    echo "Apple";
    echo "<br/>";
}

function test($a)
{
    $a();
    echo "hii there is not good time";
}

$apple = "apple";
test($apple);
