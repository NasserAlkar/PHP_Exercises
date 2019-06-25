<?php
// if a variable is set (means it has value)
// Declare / Initialize
$x;
$y = 5;

var_dump(isset($x));
var_dump(isset($y));

if (empty($x))
    echo 'X is empty';
else 
    echo ' X is not empty';

echo '<br>';
// count the number of characters in array
$message = 'my message';
echo strlen($message);
?>