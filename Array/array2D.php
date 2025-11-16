<?php

$numbers = [
    [10,20,30,40],
    [200,400,500,300],
    [30,90,2,10]
];

//3row 4col
// foreach
echo "<table border='1'> ";


foreach($numbers as $row){
    //
    echo "<tr>";
    
    foreach($row as $col){
        echo  "<td>$col</td> ";
    }
    echo "</tr>";

}
echo "</table>";






?>