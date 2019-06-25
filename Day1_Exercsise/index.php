<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Root Exercises Folder</title>
</head>
<body>
    

    <?php
    echo '<h1> This is my first exercises </h1>';
    
    $fruit =[
        'apple',
        'Strawberry',
        'Pineapple',
        'Lemon'
    ];
    echo $fruit[2] . '<br>';

    $clothes =[
        'T-Shirt' => '20',
        'Caps' => '10',
        'Shoes' => '5'
    ];
    echo $clothes["Caps"]  . '<br>' ;

    $clothes['Caps']+=5;
    $clothes['Shoes']+=20;
    echo $clothes['Shoes'];

    $contact = [
        'Ricardo'=>[
            'tel'=>'677777777',
            'Email'=>'ricardo@gmail.com'
        ],
        'Michael'=>[
            'tel'=>'606060606',
            'Email'=>' mj@gmail.com'
        ],
        'Emmanuel'=>[
            'tel'=>'610101010',
            'Email'=>' manu@gmail.com'
        ]
    ];

    echo $contact['Ricardo']['tel'] . '<br>';
    echo $contact['Ricardo']['Email'];
    var_dump ($contact);


    ?>
</body>
</html>