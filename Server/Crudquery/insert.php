<?php

include "connection.php";

$insert = "INSERT INTO drink (name,qty,price)
           VALUES('coca',10,10.6),
           ('sting',10,10.6)";
$insert_send=$con->query($insert);
if($insert){
    echo "insert successfully";
//    redirect to table page
header("Location:table.php");
}else{
    echo "insert fail";
}


    



?>