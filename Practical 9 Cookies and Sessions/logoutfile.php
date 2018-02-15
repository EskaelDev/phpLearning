<?php
session_start();
session_destroy();
echo "You are now logged out<br><br>";
echo "<a href='main1.php'>Go to Main 1</a><br>";
echo "<a href='page1.php'>Go to Page 1</a><br>"; ?>