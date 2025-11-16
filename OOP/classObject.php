<?Php
class Fruit{
    // data member ,propoties
    public
   $name = "Mango",
   $color = "red";

    // method
    function display(){
              echo $this->name;
              echo $this->color;
    }
}

//object 
$fruit1 = new Fruit();

$fruit1->display();






?>