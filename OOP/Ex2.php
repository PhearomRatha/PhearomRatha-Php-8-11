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
    <form action="Ex2Result.php" class="w-25 shadow-lg p-3 m-auto mt-5" method="post">
        <h3 class="text-center">Form</h3>
        <div class="mb-3">
            <label for="" class="form-lable">Username</label>
            <input type="text" class="form-control" placeholder="username" name="username">
        </div>
                <div class="mb-3">
            <label for="" class="form-lable">Email</label>
            <input type="text" class="form-control" placeholder="email" name="email">
        </div>
                <div class="mb-3">
            <label for="" class="form-lable">Password</label>
            <input type="text" class="form-control" placeholder="psw" name="psw">
        </div>
        <button type="submit" name="send" class="btn btn-primary w-100">Send</button>
    </form>
    
</body>
</html>