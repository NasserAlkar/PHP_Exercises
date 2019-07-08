<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Document</title>
</head>


<body>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>
   <li><a href='movies'>movies</a></li>
   <li><a href='directors.php'>directors</a></li>
   <li><a href='login.php'>log in</a></li>
   <li><a href='signin.php'>sign in</a></li>
</ul>
</div>


    <h1>welcome to my world bit**</h1>

    <?php
    // to work with database , we will use a function call :mysqli
    require_once 'database.php';
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    echo 'connection successfull <br>';
    //  choose which database that i want to work with
    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);


    echo $db_name . ' found!' . '<br>';
    $query = 'SELECT title, release_year FROM movies ORDER BY release_year DESC  limit 3  ';

    $result = mysqli_query($conn, $query);


    while ($db_record = mysqli_fetch_assoc($result)) {
        echo '<hr>';
        echo $db_record['title'] . '<br>';
        echo $db_record['release_year'] . '<br>';
    }

    ?>
    <a href="movies.php"> hello there</a>



</body>

</html>