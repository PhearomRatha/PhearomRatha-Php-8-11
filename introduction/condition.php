<?php
$num1=10;
$num2=20;
// if statement
if($num1>$num2){//false
    echo "num1 = $num1 is bigger than num2";
}
// if else 
if($num1>$num2){
    echo "num1 = $num1 is bigger than num2";
}else{
    echo "num2 = $num2 is bigger than num1 = $num1";
}



// if else if
if($num1>=10){
    echo "num $num1 in group 1";
}else if($num1 >=20 && $num1<=10){
    echo "num1 $num1 in group 2";

}else{
    echo "num1 : $num1 not in our class";
}

if('10'==10){
    echo "equal";
}

?>