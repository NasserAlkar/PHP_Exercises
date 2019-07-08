<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */


// Fopen - Open and creat file
$log = fopen("last_access.log", "w");
fwrite($log, time());

// Check if a file exists
if (file_exists("last_access.log")) {
	// Fopen - Open a file
	$log = fopen("last_access.log", "r");

	while (!feof($log)) {
		// Retrieve the current line and move on to the next
		$line_of_text = fgets($log);
		echo $line_of_text . "<br>";
	}
	// Loop until you reach the end of file (eof)


	// Close the open file
	fclose($log);
} else
	echo "File doestn't exist";
