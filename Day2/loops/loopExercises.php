<!-- /*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

    */ -->
    
    <?php
        echo'<h1>Seconf Excercise</h1>';

    $array = array(
        "Salad"=>"1.03",
        "Tomato"=>"2.3",
        "Oignon"=>"1.85",
        "Red cabbage"=>"0.85"
    );

    echo'<h3>Normal Array</h3>';
    var_dump($array);

    echo'<h3>sorted by value</h3>';
    asort($array);
    var_dump($array);

    echo'<h3>sorted by Key</h3>';
    ksort($array);
    var_dump($array);


    echo'<h3>the total of the spending</h3>';
    $total=0;
    foreach ($array as $key => $value) {
        $total += $value;
    };
    echo $total;


    echo'<h1>3rd Excercise</h1>';
/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
    */
    echo'<h3>Do it by using a for AND a while loop</h3>';

    $numbersArray = [];
    for ($i=0; $i < 21 ; $i++) { 
        $numbersArray = $i;
        echo $numbersArray. '<br>';
    };

    $arrray = [];
    $a=0;
    while ($a <= 20) {
        $arrray[] = $a;
        $a++;
    }
    var_dump($arrray) . '<br>' ;


	/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/
    echo'<h3>exercise 4</h3>';

    $numbersArrayy = [];
    $multi = 2;
    for ($i=0; $i <11 ; $i++) { 
        $numbersArrayy[$i] = ($i * $multi);
       
    };
    var_dump($numbersArrayy);


    	/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
    */
    echo'<h3>exercise 5</h3>';

    $random=[];
    for ($i=0; $i <11 ; $i++) { 
        $random[] = rand(0,100);
    };
    var_dump($random);
    echo ' smallest value ' . ' / ' . min($random). '<br>';
    echo ' greater value ' . ' / ' . max($random);


    $random1=[];
    for ($i=0; $i <11 ; $i++) { 
        $random1[] = rand(0,100);
    };
    
   
    $posMax = 0;
    $posMin = 0;
    foreach ($random1 as $key => $value) {
        if ($value > $random1[$posMax]){
            $posMax = $key;

        }
         if($value < $random1[$posMax]){
             $posMin = $key;

         }
         
    }
     var_dump($random1);
     echo ' smallest value ' . ' / ' .$random1[$posMax] . '<br>';
     echo ' the positions is ' . ' / ' .$posMax . '<br>';
     echo ' greater value ' . ' / ' .$random1[$posMin] . '<br>' ;
     echo ' the postition is  ' . ' / ' . $posMin;


    ?>