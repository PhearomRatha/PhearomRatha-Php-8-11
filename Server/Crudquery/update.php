<?php

include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $update="UPDATE drink SET name='milk',price=10.4,qty=5 
                WHERE Code = $id";
    $update_send=$con->query($update);
    if($update_send){
        echo "update successfully";
        header("Location:table.php");
    }else{
        echo "update fail";
    }

}




?>