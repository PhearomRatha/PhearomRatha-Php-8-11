<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <a href="insert.php" class="btn btn-success">Add more</a>
    
    <table class="table text-center">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>QTy</th>
                <th>Price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>23</td>
                <td>coca</td>
                <td>09876</td>
                <td>8.5$</td>
                <td> <a href="" class="btn btn-primary">Update</a> </td>
                <td> <a href="" class="btn btn-danger">Remove</a> </td>
            </tr>
             <?php  include "select.php" ?>
        </tbody>

    </table>
    
</body>
</html>