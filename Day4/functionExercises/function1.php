<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>Exercise 2</h1>

    <?php

    function smallLarg($x, $y)
    {
        if ($x > $y) {
            echo 'The first number is larger';
        } else if ($x < $y) {
            echo 'The first number is smaller';
        } else {
            echo 'The two numbers are identical';
        }
    }
    echo smallLarg(5, 6);
    ?>

    <h1>Exercise 3</h1>
    <?php
    $count = 0;
    $array = [20, 50, 10, 90, 22, 10];
    foreach ($array as $key => $value) {
        $count += $value;
    }
    echo $count . '<br>';

    function counter()
    {
        $count1 = 0;
        $array1 = [20, 50, 10, 90, 22, 10];
        foreach ($array1 as $key => $value) {
            $count1 += $value;
        }
        echo $count1;
    }
    echo counter() . '<br>';
    ?>

    <h1> Exercice 4</h1>
    <?php
    // $first = 'kayak';
    // if ($first === strrev($first)) {
    //     echo 'it is a palindrome';
    // }else{
    //     echo 'it is not a palindrome' ;
    // }
    echo '<br>';
    $first = 'kayak';
    $reverse = '';
    $i = 0;
    while (!empty($first[$i])) {
        $reverse = $first[$i] . $reverse;
        $i++;
    }
    echo 'the first world is ' . $first . '<br>';
    echo 'the second word is ' . $reverse . '<br>';
    if ($first === $reverse) {
        echo 'it is a palindrome';
    } else {
        echo 'it is not a palindrome';
    }
    ?>

    <h1> Exercice 5</h1>
    <?php
    function IsPrime($n)
    {
        for ($x = 2; $x < $n; $x++) {
            if ($n % $x == 0) {
                return false;
            }
        }
        return true;
    }
    $a = IsPrime(15);
    echo $a ? 'This is a Prime Number.' : 'This is not a Prime Number.';
    ?>

    <h1> Exercice 6</h1>

    <?php
    function  htmlImages($src)
    {
        echo  '<img src="' . $src . '" alt="">';
    }

    htmlImages('data:image/jpeg;base64,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');

    ?>

    <h1> Exercice 7</h1>
    <?php
    function numbersAsParameter($x = 2, $y = 6)
    {
        return $x * $y;
    }
    echo numbersAsParameter() . '<br>';
    echo numbersAsParameter(10, 2) . '<br>';
    echo numbersAsParameter(4) . '<br>';



    ?>
    <h1> Exercice 8</h1>
    <?php
    function mirror()
    {

        echo '<br>';
        $mirror = 'mirror';
        $reverse1 = '';
        $i = 0;
        while (!empty($mirror[$i])) {
            $reverse1 = $mirror[$i] . $reverse1;
            $i++;
        }
        echo $reverse1;
    }
    echo mirror();
    ?>




    <h1> Exercice 9</h1>
    <?php
    function countWords($text)
    {
        $array = explode(' ', $text);
        var_dump($array);
        echo count($array);
    }
    countWords('hallo there i am goog');
    ?>

    <h1> Exercice 10</h1>
    <?php
    function countEachWords($test)
    {
        $array = explode(' ', $test);
        $eachWord = [];
        foreach ($array as $key => $value) {
            if (!isset($eachWord[$value])) {
                $eachWord[$value] = 1;
            } else {
                $eachWord[$value] += 1;
            }
        }
        return $eachWord;
    }
    var_dump(countEachWords('hallo every one , hallo hallo every')) ;


    ?>

</html>