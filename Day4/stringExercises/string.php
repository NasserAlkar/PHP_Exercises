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

$text = '';
if(isset($_POST['uppercase'])){
    $text =$_POST['text'];
    echo strtoupper($text);
}else if (isset ($_POST['lowercase'])){
    $text =$_POST['text'];
    echo strtolower($text);
}else if(isset($_POST['capital1'])){
    $text =$_POST['text'];
    echo ucwords($text);
}else if(isset ($_POST['capital2'])){
    $text =$_POST['text'];
    echo ucfirst($text);
}else if(isset($_POST['explode'])){
    $text =$_POST['text'];
    $array = explode('.',$text);
    echo($array[0]);
}else if(isset($_POST['strpos'])){
    $text =$_POST['text'];
    echo substr($text, 0, strpos($text,'.')). '<br>';
    // echo strpos($text, '.'). '<br>';
}


?>    


    <form action="" method="POST" >
        <input type="text" name="text" placeholder="text"> <br>
        <input type="submit" name="uppercase" value="uppercase"> <br>
        <input type="submit" name="lowercase" value="lowercase"> <br>
        <input type="submit" name="capital1" value="capital letter to each word"> <br>
        <input type="submit" name="capital2" value="capital letter, but only at the beginning"> <br>
        <input type="submit" name="explode" value="explode"> <br>
        <input type="submit" name="strpos" value="strpos and substr"> <br>

        

    </form>



</body>
</html>