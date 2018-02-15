<?php
session_start();
if (!isset($_SESSION['login']))
{
    header("location: Ajax_Login.html");
}
else{
    print "In newpage.php<br>";
    session_destroy();
}


/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 15.02.2018
 * Time: 23:00
 */