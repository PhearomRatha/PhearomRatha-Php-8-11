<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $remove = "DELETE FROM drink where Code = $id";
    $remove_send=$con->query($remove);
    if($remove_send){
        header("Location:table.php");
    }else{
        echo "remove fail";
    }
}



?>