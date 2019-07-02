<?php

// open the file in writing mode
// if it doesnt exists, it will cret one
$file_handle = fopen('test_file.txt', 'a');
$file_content = 'Helloooo, hoe r t u?';

fwrite($file_handle, $file_content);

// close the file
fclose($file_handle);

echo 'File created!';