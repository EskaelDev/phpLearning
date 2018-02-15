<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: main1.php"); // redirects to main page
}
echo "Inside Page One<br>";
echo "login session variable is " . $_SESSION['login'] . "<br><br>";
echo "MENU<br>";
echo "<a href='main1.php'>Return to Main 1</a><br>";
echo "<a href='logoutfile.php'>Logout</a><br>"; ?>