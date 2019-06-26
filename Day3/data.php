<?php
    $firstName = '';
    if(!empty($_POST)){
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo 'name : ' . $firstName . ' / ' . $lastName;

        $filteredMail = filter_var($email, FILTER_VALIDATE_EMAIL);
        var_dump($filteredMail);

        if(trim($firstName) == 'Abdulnasser' && strlen($password) > 6 ){
            echo ' u r welcome';
        }else {
            echo ' u r not allow to view this page ';
        }
    }
    ?>