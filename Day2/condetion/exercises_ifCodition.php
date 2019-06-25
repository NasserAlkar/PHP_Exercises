<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>characteristics</title>

</head>

<body>
    <?php
    $myHero = '<h1> My Hero </h1>';
    echo $myHero . '<br>';
    $MyHeroImage = '<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/51158316-fd7e-48ca-b5fe-8542e9dfe357/dc6mse3-55695d6a-285c-413b-a30b-2c245ece6622.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUxMTU4MzE2LWZkN2UtNDhjYS1iNWZlLTg1NDJlOWRmZTM1N1wvZGM2bXNlMy01NTY5NWQ2YS0yODVjLTQxM2ItYTMwYi0yYzI0NWVjZTY2MjIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.10LCrhT7gQpR2GtIHMLKzH7rRtOd5oRg6YPKEpk9P2A" alt="">' . '<br>';
    echo $MyHeroImage . '<br>';

    $heroLastName = '<h1>Akagami</h1>';
    echo $heroLastName;

    $heroFirstName = '<h1>Shanks</h1>';
    echo $heroFirstName;

    $characteristics = [
        'attakPoint' => '65464',
        'defensePoint' => '99447',
        'Hacky' => ' kings Hacky '
    ];



    echo 'attak Point ; ' . $characteristics['attakPoint'] . '<br>';
    echo 'defense Point; ' . $characteristics['defensePoint'] . '<br>';
    echo 'Hacky tybe ; ' . $characteristics['Hacky'] . '<br>';


    ?>

    <?php
    if ($characteristics['attakPoint'] > 9)
        echo '<div> 
        <strong>Congratulations! </strong> Your character is ready to fight
        </div>';
    else if ($characteristics['attakPoint'] < 5)
        echo '<div> 
        <strong>Wait ! Your charachter is too weeeakk!</strong>
         </div>';

    echo '<h1> looop exercise</h1>';

    foreach ($characteristics as $key => $value) {
        echo  $key . ' / ' . $value . '<br>';
    };
    




    ?>
</body>

</html>