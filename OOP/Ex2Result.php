<?php
class User{
    public $name,$email,$psw;
    public function SetUser($Name,$Email,$psw){
        $this->name=$Name;
        $this->email=$Email;
        $this->psw=$psw;

    }
    public function getName(){
        return $this->name;

    }
      public function getEmail(){
        return $this->email;

    }
      public function getPsw(){
        return $this->psw;
    }

  
}
if(isset($_POST["send"])){
    $name= $_POST["username"];
    $email=$_POST["email"];
    $psw = $_POST["psw"];

    // make object
    $user = new User();
    $user->SetUser($name,$email,$psw);
    
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class=" d-flex flex-column justify-content-start align-items-start">
    <a href="Ex2.php" class="btn btn-primary  ">Back</a>
    <table class="table  ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $user->getName()  ?></td>
                <td> <?php echo $user->getName()  ?></td>
                <td> <?php echo $user->getPsw()   ?></td>
            </tr>
        </tbody>

    </table>
    
</body>
</html>