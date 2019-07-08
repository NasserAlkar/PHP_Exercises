<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<?php

	/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.
		

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/

	// Fopen - Open a file
	$file_handle = fopen("message.txt", "w");

	// Check if a file exists
	if (file_exists("transform_to_table.txt")) {
		// Fopen - Open a file
		$file_handle1 = fopen("transform_to_table.txt", "r");

		while (!feof($file_handle1)) {
			// Retrieve the current line and move on to the next
			$line_of_text = fgets($file_handle1);
			echo $line_of_text . "<br>";
		}
		// Loop until you reach the end of file (eof)


		// Close the open file
		fclose($file_handle1);
	} else
		echo "File doestn't exist";

	?>
	<h1>TO SHOW IN A HTML TABLE</h1>

	<?php
	$file_handle1 = fopen("transform_to_table.txt", "r");
	?>
	<table width='200' border="1">
		<tr>
			<td>logo</td>
		</tr>
		<?php
		while (!feof($file_handle1)) {
			// Retrieve the current line and move on to the next
			$line_of_text = fgets($file_handle1);
			echo '<tr><td>' . $line_of_text . '</td></tr>';
		}
		?>

	</table>



</body>

</html>