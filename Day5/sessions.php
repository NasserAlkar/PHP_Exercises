<?php
session_start();
$_SESSION['page_view'] =1;
$_SESSION['LAST_ACTIVITY'] =time();

var_dump($_SESSION);
var_dump($_COOKIE);

// DELETE the session
if(
    isset($_SESSION['LAST_ACTIVITY'])
    && (time() - $_SESSION['LAST_ACTIVITY'])>120
    ){
        // Delete the sesion from the script
        session_unset();
        // Delete the session from the file system (server)
        session_destroy();
    }
    // regenerate the session id (security atters)
    session_regenerate_id();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

