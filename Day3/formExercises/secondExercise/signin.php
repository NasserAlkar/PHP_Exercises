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
$firstName='';
$lastName='';
$email = '';
$password = '';
$passwordConfermation='';
if (isset($_POST['submitButton'])) {
    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $passwordConfermation = $_POST['passwordConfermation'];
    echo 'the Name is' . ': ' .$firstName .' '. $lastName . '<br>';
    echo' the Email is;' . $email . '<br>';
    echo 'the password is: ' . $password . '<br>' ;
    echo ' the password Confermation is :'. $passwordConfermation . '<br>' ;

    if (empty($lastName) || empty($firstName)) {
        echo ' please Enter a first and a last Name';
    }
    
    $filteredMail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (strlen($filteredMail)>=8 && strlen($filteredMail)<=50) {
        echo ' your Email is correct' . '<br>' ;
    }else if(strlen($filteredMail)>=8){
        echo 'your email is too short' . '<br>' ;
    }else {
        echo ' your email is too long' . '<br>' ;
    }

    if ($password === $passwordConfermation) {
        if ( strlen($password) > 8 &&  strlen($password) < 50) {
            echo 'Password is coorrect' . '<br>' ;
        }else if ( strlen($password) < 8){
            echo 'your password is too short, needed to be more than 8 charectors' . '<br>' ;
        }else{
            echo 'your password is too long, needed to be less than 50 charectors' . '<br>' ;
        }
        
    }else{
        echo 'your password and the password confermation are not match, please check aagain' . '<br>' ;
    }
}
?>

    <form action="" method="POST">
        <input type="text" name="firstName" placeholder="First Name"  value="<?php echo $firstName ?>">
        <input type="text" name="lastName" placeholder="Last Name"  value="<?php echo $lastName ?>" >
        <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
        <input type="password" name="password" placeholder="Password" value="<?php echo $password ?>">
        <input type="password" name="passwordConfermation" placeholder="passwordConfermation" value="<?php echo $passwordConfermation?>">
        <input type="checkbox" name="checkbox" required><label for="Checkbox">Subscribe to the newsletter</label>
        <input type="submit" value="send" name="submitButton">



    </form>


</body>

</html>