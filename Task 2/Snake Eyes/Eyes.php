<?php
$snk = 0;
for ($i = 0; $i < 50; $i++){
    if(rand(1,6)==1 && rand(1,6)==1)
        $snk++;
}
echo $snk;
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 06.02.2018
 * Time: 15:30
 */