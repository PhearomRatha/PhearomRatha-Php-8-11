<?php

include "connect.php";

$select = "SELECT * FROM products";
$select_send=$con->query($select);
while($row=mysqli_fetch_assoc($select_send)){
    
}




?>