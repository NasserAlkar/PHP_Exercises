<?php

// declare a function
function helloWord(){
    echo 'hello';
}
// function with arguments
function greetings($msg = 'Hey Bro'){
    echo 'You\'re message;' . $msg;
}
function multiply($x, $y=2){
    echo ($x * $y);
}

function multiplyReturn($x, $y=2){
    return ($x * $y);
}

function displaMessagey($msg, &$x){
    $x+=10;
    return ($msg. ':'. $x);
}


// call the function
helloWord();
echo '<br>';
greetings('hello !');
echo '<br>';
greetings();
echo '<br>';
multiply(4);
echo '<br>';
echo multiplyReturn(4);
echo '<br>';

$myNumber = 5;
echo '<br>'.'BRFORE -- my number outside of the function :'
.$myNumber . '<br>';
echo displaMessagey('helllo everyone', $myNumber);
echo '<br>'.'AFTER -- my number outside of the function :'
.$myNumber;

?>