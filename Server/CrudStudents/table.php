<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<a href="create.php" class="btn btn-primary m-5">Create</a>

<table class="table w-75 m-auto text-center ">
    <thead class="table-dark text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Major</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>101</td>
            <td>LyLy</td>
            <td>Male</td>
            <td>ITE</td>
            <td><a href="" class="btn btn-outline-danger">Remove</a></td>
            <td><a href="" class="btn btn-outline-warning">Update</a></td>
        </tr>

        <?php include "select.php" ?>
        
    </tbody>

</table>
    
</body>
</html>