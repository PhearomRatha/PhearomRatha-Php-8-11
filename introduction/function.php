<?php


// none return function 

//none return function 
 function sum(){
    $a=100;
    $b=200;
    $c = $a+$b;
    echo $c;
 
 }
 //calling function
 sum();
 $total = sum()+300;
 echo $total;


 // none return function  has param

 function Greeting($name){
    echo "<br>welcome $name to our claass";
 }
 // calling function
 // Seng argument

 Greeting("Seng");
 Greeting("LY");
 Greeting("Channa");



 // return function 

 //return function no param
 function Sum1(){
    $a=100;
    $b=200;
    return $a+$b;
 }

 $total1= Sum1()+ 200;

 echo "<br>" .$total1;//500



// return function has param 
 function sum2($a,$b){
    return $a-$b;
 }

 $total2= sum2(100,200,500) + Sum1();
 echo "<br>" .$total2;//200















?>