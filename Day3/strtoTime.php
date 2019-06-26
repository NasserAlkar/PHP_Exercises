<?php
// strtotime function will ' transform ' date, or string, into timestamp artgument must be in english
echo strtotime('now') . '<br>';
$timeStamp = strtotime('October 19 1990');
echo date('d/m/Y', $timeStamp)  . '<br>';


$timeStamp2 = strtotime('next Monday');
echo date('d/m/Y', $timeStamp2)  . '<br>';




?>