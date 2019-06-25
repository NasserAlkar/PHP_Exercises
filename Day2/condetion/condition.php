
<?php
// Test something
// if ($condition){
//     echo 'it is true ';
//     echo 'blabla';
// } else {
//     echo ' it is not true!';
// }
// OR

// if ($condition)
//     echo 'it is true ';


$test = true;
if ($test == true)
    echo ' it is true';
else
    echo'it is not true';
?>

<div>
    <?php if ($test) : ?>
    <p>It is true</p>
    <?php endif; ?>
</div>

<h1>second solution</h1>
<?php
$x = 10;
$y = 5;

if( $x == $y)
    echo ' Two values are the same';
else if ($x > $y)
    echo ' X value is bigger';
else 
    echo ' Y value is bigger';
    echo '<br>';

if ( $x >= $y)
    echo 'X is greater or equal than Y';
    echo '<br>';

if( $x != $y)
    echo 'Both value are different';
    echo '<br>';

$results = ($x==$y) ? 'it is true' : 'it is not true';
echo $results . '<br>';

if ($x % 2 == 0)
    echo ' X is pair number ';
?>