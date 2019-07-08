<?php
// to worl with database , we will use a function call :mysqli
require_once 'database.php';
// connect to my database server
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo 'connection successfull <br>';
//  choose which database that i want to work with
$db_name = 'moviedb';
$db_found = mysqli_select_db($conn, $db_name);

if ($db_found) {
    echo "$db_name found! <br>";
    $query = 'SELECT*FROM movies';
    $result = mysqli_query($conn, $query);
    mysqli_query($conn, $query);

    // I retrieve the result as an array and
    //  display thi array (using a loop)

    while($db_record = mysqli_fetch_assoc($result)){
       echo '<hr>';
       echo $db_record['title'].'<br>';
       echo $db_record['release_year'].'<br>';
       echo $db_record['views'].'<br>';
    }

} else {
    echo '$db_name not found! <br>';
};
//close the connection to the database
mysqli_close($conn);
