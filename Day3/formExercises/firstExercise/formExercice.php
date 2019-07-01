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
    $users = array("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john", "Abdulnasser Alkar");

    $firstName='';
    $lastName = '';
    if (!empty($_POST)) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $name = $firstName . ' '  . $lastName;
        $msg = ' you are not allow to view this page ';

        foreach ($users as $key => $value) {
            //$arrayValue = $value;
            // echo $arrayValue;
            if (trim($name) == $value) {
                $msg = ' you are welcome';
            }
        }
        echo $name;
        echo $msg;
    }
?>

<form action="" method="POST">
    <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName?>">
    <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName ?>">
    <input type="submit" value="send">
</form>



</body>
</html>