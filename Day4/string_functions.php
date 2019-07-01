<?php
// change the case of the string make it all capital letters
$string = 'Here, take a drink';
echo strtoupper($string). '<br>';

// make all the string in lower case
echo strtolower($string) . '<br>';

// First letter upper case
echo ucfirst($string). '<br>';

// first letter upper case for each word
echo ucwords($string). '<br>';

// find the position of a character in a string
echo strpos($string, ','). '<br>';

if(strpos($string, '@')){

    echo 'we fint it'. '<br>';
}else{
    echo ' not found'. '<br>';
};

// retrieve only one part of a string ( sub-string )
$string = 'Here, take another drink.';
echo substr($string,19 ). '<br>';
echo substr($string,11,7 ). '<br>';
echo substr($string,-6 ). '<br>';

// replace a string into a string
echo str_replace('drink','coca-cola', $string). '<br>';

// Delete a character at the left and right side of the string
echo trim($string, '.');
// delete on the left side with ltrim($string)
// delete on the right side with rtrim($string)

// convert a string into an array using a delimiter
$string = 'Hallo Nasser I hope you ok';
$array = explode(' ',$string);
var_dump($array);

// convert a string into an array using a delimiter
$string2 = implode(' ',$array);
echo $string2;

?>