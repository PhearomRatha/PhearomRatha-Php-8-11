<?php
include "connect.php";

$select= "SELECT * FROM students";
$select_send=$con->query($select);
while($row=mysqli_fetch_assoc($select_send)){

    echo "   
     <tr>
            <td>$row[id]</td>
            <td>{$row['stu-name']}</td>
            <td>{$row['stu-gender']}</td>
            <td>{$row['stu-major']}</td>
            <td><a href='' class='btn btn-outline-danger'>Remove</a></td>
            <td><a href='update.php?id=$row[id]' class='btn btn-outline-warning'>Update</a></td>
        </tr>";

}




?>