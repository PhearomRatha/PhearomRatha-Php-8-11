<?php

$con=mysqli_connect("localhost","root","","test");
if($con){
    echo "success";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post">
        <input type="text" name="name">
        <input type="file" name="image">
        <button type="submit" name="send">send</button>
    </form>

    
</body>
</html>

<?php

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $img=$_FILES['image']["name"];
    $tmp=$_FILES['image']['tmp_name'];
    $path="uploads/". $img;
    if(move_uploaded_file($tmp,$path)){
        $insert = "insert into products (name,image)values('$name', '$img')";
        $insert_send=$con->query($insert);
        if($insert_send){
            echo "insert success";
        }
    }
  

echo $name,$tmp,$path;


    
}



?>


