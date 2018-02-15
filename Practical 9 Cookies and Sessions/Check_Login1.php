<?php
session_start();
if (!empty($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "user1") {
        if ($password == "pass1") {
            $_SESSION['login'] = $username;
            echo 4;
        } else echo 3;
    } else echo 2;
} else echo 1;
