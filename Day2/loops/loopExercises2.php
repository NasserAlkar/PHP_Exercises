<?php
	/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
$start = '';
for ($i=0; $i < 5 ; $i++) { 
    $start .= " * ";
    echo $start;
    echo '<br>';

};
/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

    */
    echo '<hr>';
$start2 = '';
for ($i=0; $i < 5 ; $i++) { 
   $start2 .= " * ";
   echo $start2;
    echo '<br>';
}
for ($i=5; $i > 0 ; $i--) { 
   $start2 = substr($start2, 0, -1);
   echo $start2;
    echo '<br>';
}