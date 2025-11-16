<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{
        background-color: yellow;
        width: 200px;
        height: 200px;
        border-radius: 20px;
        margin: auto;
        display: inline-block;
    }
</style>
<body>
 
    <?php
    $colors = ["yellow","green","black"];
    foreach($colors as $value){
        echo "   <div class='box' style='background-color:$value'></div>";
    }
    $image = ['cuteboy1.jpg',"cuteboy2.jpg","cutegirl.jpg"]


    
    
    
    ?>
    
</body>
</html>


<?php

// $numbers = [100,200,40,70];
// echo $numbers[1];
// echo $numbers[3];
// //use foreach loop items from array
// foreach($numbers as $value){
//     echo "<br>" .$value;

// }








?>