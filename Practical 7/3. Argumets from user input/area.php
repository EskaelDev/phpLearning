<html>
<head>

</head>
<body>
<form action="area.php" method="get">

    <label for="width">width</label>
    <input type="text" value="0" id="width" name="width">
    <label for="height">height</label>
    <input type="text" value="0" id="height" name="height">
    <input type="submit" value="Submit">

</form>
</body>
</html>

<?php

function area(int $w, int $h){
    return "A rectangle of width ".$w." and height ".$h." has an area of ".$w*$h;
}

if(isset($_GET["width"]))
{
    echo area($_GET["width"], $_GET["height"]);
}
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 08.02.2018
 * Time: 14:56
 */