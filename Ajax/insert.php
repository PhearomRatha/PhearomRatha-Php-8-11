<?php

include "connect.php";

$name=$_POST['name'];
$gender=$_POST['gender'];
$major=$_POST['major'];

$insert = "INSERT INTO students (`stu-name`,`stu-major`,`stu-gender`)
          values('$name','$major','$gender')";
if($name == "" || $gender=="" || $major==""){
     echo "invalid name gender or major";

}else{
        if($conn->query($insert)){
    echo "insert success";
}else{
    echo "insert fail";
}
}






?>