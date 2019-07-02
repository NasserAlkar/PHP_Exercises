<?php
// // Real a file ( bur no nice format style)
// $file_content = readfile("movies.txt");
// echo $file_content . '<br>';

// // Another function to read a file
// $file_content = file_get_contents("movies.txt");
// echo $file_content . '<br>';

// Check if the file exists
if(file_exists('movies.txt')){
// Fopne - opne a file
$file_handle = fopen('movies.txt', 'r');
echo $file_handle . '<br>' ;

// loop until you reach the end of the file (eof)
while (!feof($file_handle)) {
    // retrieve the current line move on the next line
    $line_of_test = fgets($file_handle);
    echo $line_of_test . '<br>';
}

// close the open file
fclose($file_handle);
}else{
    echo ' file doesnt exist';
}











?>