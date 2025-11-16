<?php

// for loop
$n=5;
for($i=0;$i<5;$i++){
    echo " I miss you <br>";
}

// while
$i=0;
while($i>5){
    echo "I love you";
    $i++;

}

// do while
$i=5;
do{
    echo "Hello មនុស្សសាវ៉ា <br>";//1 
    $i+=2;


}while($i>10);


// for each

$colors = ['red','greed','blue','white'];

// value
foreach($colors as $value){
    echo "Your color is : $value <br>";
}

// index 
foreach($colors as $index =>$value){
    echo "$index: $value <br>";
}













?>