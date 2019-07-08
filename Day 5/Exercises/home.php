<?php
$users = fopen('users.txt','r');
while (!feof($users)) {
    $line = fgets($user);
    echo $line;
}


$name='';
$password='';
if(isset($_POST['submit'])){
    $name =$_POST['email'].'<br>';
    $password = $_POST['password'];
    echo $name;
    echo $password;
}





























?>