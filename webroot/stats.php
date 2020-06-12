<?php
$counter_name = "counter.txt";
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
echo($counterVal.' Visiteurs');
?>