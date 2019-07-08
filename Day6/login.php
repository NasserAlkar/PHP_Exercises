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
    <h1>sign in</h1>
    <?php
    // to work with database , we will use a function call :mysqli
    require_once 'database.php';
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    echo 'connection successfull <br>';
    //  choose which database that i want to work with
    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);
    $msg = ' user is not found';

    if (isset($_POST['submit1'])) {
        $email1 = filter_var($_POST['email1'], FILTER_SANITIZE_EMAIL);
        $password1 = htmlspecialchars($_POST['password1']);

        if (filter_var($email1, FILTER_VALIDATE_EMAIL) && strlen($password1) > 3) {
            $query = "SELECT * 
            from users
            WHERE email = '$email1' AND password =  '$password1'";
            $result1 = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result1);
            if ($data) {
                $msg ='user found';
            }
        } else {
            echo ' please check your email and password';
        }
        echo $msg;
    }



    ?>





    <form action="" method='POST'>
        <input type="text" name='email1' placeholder='email'>
        <input type="text" name='password1' placeholder=' enter your password'>
        <input type="submit" name='submit1'>


    </form>
</body>

</html>