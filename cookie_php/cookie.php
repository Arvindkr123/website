<?php

setcookie("fruit", "apple", time() + (86400));
// print_r($_COOKIE);

if ($_COOKIE['fruit']) {
    echo 'Current cookie is ' . $_COOKIE['fruit'];
} else {
    echo "no cookie found with this name";
}
