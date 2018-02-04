<?php
$name = $_GET["name"];
$mark1 = $_GET["mark1"];
$mark2 = $_GET["mark2"];
$mark3 = $_GET["mark3"];
$mark4 = $_GET["mark4"];

echo $name." avg = ".($mark1+$mark2+$mark3+$mark4)/4;


?>
