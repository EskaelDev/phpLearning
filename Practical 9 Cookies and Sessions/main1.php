<?php
session_start();
echo "Start of main 1<br>";

?>
<?php
$servername = "localhost";
$username = "root";
$dbname = "phplearn";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT id FROM user WHERE username= "'.$_GET["username"].'" and password = "'.$_GET["password"].'"';

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "connected";
    $_SESSION['login'] = "Yes";
    $_SESSION['username']=$username;



} else {
    header("Location: login.html");
    exit();
}
$conn->close();
?>


<?php

echo "login session variable is " . $_SESSION['login'] . "<br><br>";
if (!isset($_SESSION['login'])) {
    echo "Setting login session variable<br>";
    $username = 'name';// Add your name in place of ‘name’ $_SESSION['login']= $username;
    /*These 3 lines of code are only here because there is no login yet. The session login variable should be set by the login checker. When it is, a location () command will replace this and redirect back to the login page*/
}
echo "Inside main 1<br>";
echo "login session variable is " . $_SESSION['login'] . "<br><br>";
echo "MENU<br>";
echo "<a href='page1.php'>Page 1</a><br>";
echo "<a href='logoutfile.php'>Logout</a><br>";


