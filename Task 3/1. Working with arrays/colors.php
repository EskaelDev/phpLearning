<?php

$colorist = array("violet", 'indigo', 'blue', 'green', 'yellow');
sort($colorist);
?>
<table border="2">
    <tr><th>Color</th></tr>
<?php
foreach ($colorist as $color){
    echo '<tr><td style=" color:'.$color.'">'.$color.'</td></tr>';
}
?>
</table>