<?php
function checkLogin(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!$_SESSION['users']['username']){
        header("location:index.php");

    }
}


?>
