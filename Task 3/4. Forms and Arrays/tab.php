<?php
$arr = array("Monday" => 0,
    "Tuesday" => 0,
    "Wednesday" => 0,
    "Thursday" => 0,
    "Friday" => 0,
    "Saturday" => 0,
    "Sunday" => 0);
if (isset($_GET["mon"]))
    $arr['Monday'] = 1;
if (isset($_GET["tue"]))
    $arr["Tuesday"] = 2;
if (isset($_GET["wed"]))
    $arr["Wednesday"] = 3;
if (isset($_GET["thu"]))
    $arr["Thursday"] = 4;
if (isset($_GET["fri"]))
    $arr["Friday"] = 5;
if (isset($_GET["sat"]))
    $arr["Saturday"] = 6;
if (isset($_GET["sun"]))
    $arr["Sunday"] = 7;
echo '<table border="3"><tr><th>Day</th><th>Presence</th></tr>';
foreach($arr as $day) {
    echo '<tr><td>' . key($arr). '</td>';
    next($arr);
    if ($day>0)
        echo '<td>X</td></tr>';
    else
        echo '<td> </td></tr>';
}
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 08.02.2018
 * Time: 00:04
 */