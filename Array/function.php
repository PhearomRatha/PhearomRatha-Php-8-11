<?php
$number = [10,20,40,30,200,55];

// push
//array_push($number,88);//add last element of array , 10 20 30 88
//array_unshift($number,99);// add first eleement of array 99 10 20 30
//array_pop($number); //remove last element of array 10 ,20
//echo array_pop($number);
//array_shift($number);//remove first eleemnt of array 20 30

$number2 = [20,40,200];
//$result = array_merge($number,$number2);//10,20,30,20,40,200
$slice = array_slice($number,3,1); 
asort($number);

foreach($number as $value){
    echo $value ."<br>";
    
}
$stu = ["name"=>"sopeak","age"=>18,"salary"=>100];
ksort($stu);

foreach($stu as $key =>$value){
    echo $key .":". $value ."<br>";
}




?>