<?php
$server="localhost";
$username="root";
$psw="";
$db="php-8-11";
$con=mysqli_connect($server,$username,$psw,$db);
if(!$con){
    echo "!success";
}




?>