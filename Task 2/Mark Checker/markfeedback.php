<?php

$mark = $_GET["mark"];
if (is_numeric($mark) && $mark >= 0 && $mark <= 100)
{
    if ($mark > 70)
        echo 'A';

    if ($mark >= 60 && $mark < 70)
        echo 'B';

    if ($mark >= 50 && $mark < 60)
        echo 'C';

    if ($mark >= 40 && $mark < 50)
        echo 'D';

    if ($mark < 40)
        echo 'E';
}
else {
    echo 'Wrong input';
}

