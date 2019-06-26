<?php
date_default_timezone_set('Europe/Luxembourg');
// Mos known formates are : Y m d H i s

// return the days number
echo date('d') .'<br>';

// return the days number (with 0 in front)
echo date('j') .'<br>' ;

// return the months number
echo date('m') .'<br>' ;
// same without 0
echo date('n') .'<br>';

// return the year
echo date('Y') . '<br>';
// last two digits og the year
echo date('y') . '<br>';

// return the hour 24h systmee
echo date('H') . '<br>';
// return the hour 12h systeme
echo date('h') . '<br>';

// return the timestapm
echo date('U') . '<br>';

// return the date of the day
echo date('Y-m-d  H:i:s') . '<br>';







?>