
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name">
        <input type="text" name="color">
        <input type="text" name="price">
    <button type="submit" name="send">submit</button>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $color=$_POST['color'];
    $price = $_POST['price'];

class Fruit{
    public $name,$color;
    public function __construct ($name,$color){
        $this->name=$name;
        $this->color=$color;

    }
    protected function display(){
        echo "The fruit name: $this->name <br> color: $this->color <br>";
    }   
}
class Apple extends Fruit{
    public  $price;
    public function __construct($name,$color,$price){
        $this->name=$name;
        $this->color=$color;
        $this->price=$price;
        
    }
    public function display()
    {
        Fruit::display();
        echo "Price: $this->price";
    }
    public function welcome(){
        echo "Hello welcome to our store <br>";
    }
}


$apple = new Apple($name,$color,$price);
$apple->welcome();
$apple->display();

}
?>