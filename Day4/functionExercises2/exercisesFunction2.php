<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>-- Exercise 1 :</h1>
<?php
function recursive($x){
     for ($i=1; $i <= $x ; $i++) { 
        recursive($x + 1);
        if ($x < 50) {
        echo $x . '<br>';
        }
    }
  }
echo recursive(20);


?>





</body>
</html>