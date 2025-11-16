<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <form  class="w-25 p-3 m-auto rounded-3 shadow-lg mt-4 " method="post">
        <h5 class="text-center mb-3 text-primary">Student Information</h5>
        <div class="mb-2">
            <label for="Name" class="form-label">Student's Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <label class="form-label">Gender</label>
        <div class=" d-flex  gap-4 align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="male">
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="female">
                <label class="form-check-label" for="male">
                    Female
                </label>
            </div>
        </div>
        </div>
     <div class="mt-2">
        <label for="Name" class="form-label">Student's Major</label>
        <input type="text" class="form-control" placeholder="major" name="major">
    </div>
    <div class="mt-2 d-flex justify-content-center align-items-center">
        <button type="submit" class=" btn  btn-primary" name="create">Create </button>
    </div>
    </form>

</body>

</html>



<?php

include "connect.php";


if(isset($_POST['create'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $major=$_POST['major'];
    $insert = "INSERT INTO students (`stu-name`,`stu-major`,`stu-gender`)
               VALUES('$name','$major','$gender')";
    $insert_send=$con->query($insert);
    if($insert_send){
        // redirect to table
        header("Location:table.php");
    }else{
        echo "insert fail";
    }

    


}





?>