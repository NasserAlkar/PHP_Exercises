<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Sign In</h1>
    <?php
    // to work with database , we will use a function call :mysqli
    require_once 'database.php';
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    echo 'connection successfull <br>';
    //  choose which database that i want to work with
    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);


    if (isset($_POST['submit'])) {
        $first = htmlspecialchars($_POST['first_name']);
        $last = htmlspecialchars($_POST['last_name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($_POST['password']);
        //  echo $first; 
        //  echo $last; 
        //  echo $email;
        //  echo $password; 

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) > 3) {
            echo $db_name . ' found!' . '<br>';
            $query = "INSERT INTO users
              (first_name , last_name, email, password)
              VALUES
              ('$first', '$last', '$email','$password')";

            $result = mysqli_query($conn, $query);
            echo ' your data has been sent';
        } else {
            echo ' please check your email and password';
        }
    }
    ?>


    <form action="" method='POST'>
        <input type="text" name='first_name' placeholder='first name'>
        <input type="text" name='last_name' placeholder='last name'> <br>
        <input type="text" name='email' placeholder='email'>
        <input type="text" name='password' placeholder='password'> <br>
        <input type="submit" name='submit' value='send'>
    </form>
</body>

</html>