<?php
$fruits = [
    'coconut',
    'apple',
    'lemon'
];

// array before sort
var_dump($fruits);
// sort array
sort($fruits);
// array after sort
var_dump($fruits);

$gender= [
    'michel'=>'male',
    'sarah'=>'female',
    'ricardo'=> 'male'
];
// key sort
ksort($gender);
var_dump($gender);
// value sort
asort($gender);
var_dump($gender);

// to count the number of elements in my array
echo count($gender);


?>