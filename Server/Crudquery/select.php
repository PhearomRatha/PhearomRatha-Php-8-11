<?php
include "connection.php";
$select = "SELECT * FROM drink";
// send to db
$select_send=$con->query($select);
// store result
while($row = mysqli_fetch_assoc($select_send)){
    echo "
     <tr>
        <td>$row[Code]</td>
        <td>$row[name]</td>
        <td>$row[qty]</td>
        <td>$row[price]$</td>
        <td> <a href='update.php?id=$row[Code]' class='btn btn-primary'>Update</a> </td>
        <td> <a href='remove.php?id=$row[Code]'
              onclick= \"return confirm('Are you sure to remove this ?')\"
              class='btn btn-danger'>Remove</a>
        </td>
            
     </tr>
    ";


}


?>