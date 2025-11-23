<?php

include "connect.php";
$select = "SELECT * FROM products";
$select_send=$con->query($select);
while($row=mysqli_fetch_assoc($select_send)){
    echo "
             <tr>
                <td>$row[code]</td>
                <td>$row[pro_name]</td>
                <td>$row[pro_price]$</td>
                <td>$row[pro_qty]</td>
                <td>
                    <img src='./uploads/$row[image]'alt='' style='width: 100px; height: 100px;'>
                </td>
                <td><a href='' class='btn btn-outline-danger'>Remove</a></td>
                <td><a href='' class='btn btn-outline-info'>Update</a></td>
            </tr>
        ";
}




?>