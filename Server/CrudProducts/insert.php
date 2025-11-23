<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <a href="index.php" class="btn btn-outline-info">Back</a>
    <form class="w-25 shadow-lg p-3 m-auto " method="post" enctype="multipart/form-data">
        <h4 class="text-center">Form</h4>
        <div class="mb-3">
            <label class="form-label">product</label>
            <input type="text" class="form-control" name="name">
        </div>
            <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
        </div>
              <div class="mb-3">
            <label class="form-label">QTY</label>
            <input type="text" class="form-control" name="qty">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="img">
        </div>
        <div class="mb-3 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-success" name="send">submit</button>
        </div>
    </form>
    
</body>
</html>

<?php
include "connect.php";

if(isset($_POST['send'])){
  $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $image=$_FILES['img']['name'];
    $tmp=$_FILES['img']['tmp_name'];
    $path="./uploads/".$image;
    if(move_uploaded_file($tmp,$path)){
    $insert = "INSERT INTO products (pro_name,pro_price,pro_qty,image) 
               values('$name',$price,$qty,'$image') ";
    $insert_send=$con->query($insert);
    if($insert_send){
        header("location:index.php");

    }
 }
}



?>