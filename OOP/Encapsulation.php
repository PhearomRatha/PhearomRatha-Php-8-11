<?php

class Person{
    public $name;
    public $age;
    public $major;

    // setter
    function set_name($Name){
        $this->name = $Name;
    }
    function set_age($Age){
        $this->age=$Age;

    }
    function set_major($Major){
        $this->major=$Major;
    }


    //getter

    function get_name(){
        return $this->name;
    }
    function get_age(){
        return $this->age;
    }
    function get_major(){
        return  $this->major;
    }
}


$person1 = new Person();
//input
$person1->set_name("nika");
$person1->set_age(20); 
$person1->set_major("Ice Tea");

// output
echo $person1->get_name();
echo $person1->get_age();
echo $person1->get_major();

$person2 = new Person();

 








?>