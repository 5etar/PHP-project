<?php

if (isset($_POST['submit'])) {

    $names = ['Pesho', 'Gosho', 'Radito'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    $max = 10;
    $min = 5;

    $usernameLength = strlen($username);

    if ($usernameLength < $min) {
        echo "Username must contain more than 5 symbols";
    }

    if ($usernameLength > $max) {
        echo "Username must contain less than 10 symbols";
    }

    if (!in_array($username, $names)) {
        echo " Invalid Username";

    } else {
        echo "Welcome";

    }

}