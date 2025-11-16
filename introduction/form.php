<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="justify-content-center align-items-center d-flex flex-column">

<form action="" class="w-25 shadow-lg p-4 mt-5 rounded-2" method="post">
    <h3 class="text-center">Form</h3>
    <div class="mb-3">
        <label for="" class=" form-label">Code</label>
        <input type="text" class="form-control" placeholder="Code" name="code">
    </div>
        <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="name" name="name">
    </div>
        <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="text" class="form-control" placeholder="price" name="price">
    </div>
        <div class="mb-3">
        <label for="" class="form-label">Qty</label>
        <input type="text" class="form-control" placeholder="qty" name="qty">
    </div>
    <button type="submit" class="btn btn-primary w-100" name="send">Submit</button>
</form>

<table class="table w-50 mt-5">
    <thead>
        <tr>
            <th>code</th>
            <th>Name</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Total</th>
            <th>Payment</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include ('FormData.php');
        
        ?>
  
    </tbody>
</table>



    
</body>
</html>