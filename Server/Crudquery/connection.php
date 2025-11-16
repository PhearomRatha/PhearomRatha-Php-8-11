<?php

$hostname= "localhost";
$username="root";
$psw = "";
$db = "php-8-11";

$con= mysqli_connect($hostname,
$username,$psw,$db,);
if(!$con){
    echo "connect fail";
}



?>