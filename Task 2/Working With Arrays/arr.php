<?php
$people = array(array(21, "John"),
                array(25, "Bill"),
                array(23, "Anna"),
                array(29, "Aine"),
                array(19, "Pat"),
                array(30, "Leanne"));

echo 'people: ';
print_r($people);
echo '<hr>';
print "Whole Table<br/>";
echo "<table border=1><tr><th>Name</th><th>Age</th></tr>";
for ($x = 0; $x < 6; $x = $x + 1) {
    echo "<tr><td>" . $people[$x][0] . "</td>";
    echo "<td>" . $people[$x][1] . "</td></tr>";
}
echo "</table>";