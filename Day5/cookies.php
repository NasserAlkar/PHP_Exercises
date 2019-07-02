<?php
// create a cookie
// THIS cookie will expire after 2 min
setcookie('username','simon',time()+120);
setcookie('date','2019-07-02',time()+120);

var_dump($_COOKIE);







?>