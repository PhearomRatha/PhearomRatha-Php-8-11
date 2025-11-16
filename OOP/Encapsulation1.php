<?php

class Shop{
    public $id;
    public $name;
    public $price;     
    public $qty;
    function setID($id){
        $this->id=$id;
    }
    function setName($name){
        $this->name=$name;
    }
    function setPrice($price){
        $this->price=$price;
    }
    function setQty($qty){
        $this->qty=$qty;
    }


    function getName(){
        return $this->name;
    }
    function getID(){
        return $this->id;
    }

    function getQty(){
        return $this->qty;
    }
    function getPrice(){
        return $this->price;
    }

    function getTotal(){
        return $this->qty * $this->price;
        
    }

    
}

$product1 = new Shop();
$product1->setID(101);
echo "ID:". $product1->getID() ."<br>";
$product1->setName("coca");
echo "Name:". $product1->getName() ."<br>";
$product1->setPrice(10);
echo "Price:". $product1->getPrice() ."$<br>";
$product1->setQty(5);
echo "QTY:". $product1->getQty() ."<br>";   
echo "Total:". $product1->getTotal() ."$<br>";

?>