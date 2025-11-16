<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
    <input type="text" name="num1">
    <input type="text" name="num2">
    <button type="submit" name="op" value="add">+</button>
    <button type="submit" name="op" value="minus">-</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = $_POST['num1'];
    $num2= $_POST['num2'];   
    $op = $_POST['op'];
    echo $num1;
    echo $num2;
    echo $op;

}



?>
    
</body>
</html>