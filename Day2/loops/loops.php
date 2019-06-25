<?php

// for loop

for ($i = 0; $i <= 10; $i++){
echo  $i .'<br>';
}

$fuites = [
    'Apple',
    'Coconut',
    'Lemon'
];

echo '<hr>';

$size = count($fuites);
for ($i=0; $i<$size; $i++){
    echo $fuites[$i] . '<br>';
}

echo '<hr>';
// while
//Display all the numbers from 0 to 10
$i=0;
while ($i <= 10){
    echo $i . '<br>';
    $i++;
}
echo '<hr>';

$i=0;
while (true){
    echo $i . '<br>';
    if($i==10)
        break;
    $i++;
}
echo '<hr>';

// do while
$test = false;
do {
    // instructions
    echo 'hello';

}while($test);
echo '<hr>';

$i=0;
do {
    // instructions
    echo $i . '<br>';
    $i++;
}while($i<=10);

echo '<hr>';


foreach ($fuites as $key => $value) {
    echo 'Key : '.$key;
    echo 'Value : '. $value . '<br>';
}

echo '<hr>';

$countries = [
    'Luxembourg' => 600000,
    'France'=> 1700000,
    'German'=> 4456784,
];

foreach ($countries as $country => $ppl) {
    echo $country . ' / ' . $ppl . '<br>' ;
}


?>