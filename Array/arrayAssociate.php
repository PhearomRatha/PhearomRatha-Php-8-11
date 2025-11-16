<?php

// associate array 
$person = [
    //key    //value
    "name"=>"bopha",
    "age"=>18,
    "major"=>"Ice tea"
];

echo $person['name'] ."<br>";//bopha

      // name of array 
// foreach ($person as $key=>$value){
//     echo $key . ":" . $value . "<br>";
// }

// foreach ($person as $value){
//     echo $value . "<br>";//
// }

//2D associate array
$person=[
    ["name"=>"ly","age"=>20,"major"=>"ice Tea"],
    ["name"=>"channa","age"=>20,"major"=>"IT"],
    ["name"=>"panha","age"=>20,"major"=>"ITE"],
    ["name"=>"Seng","age"=>20,"major"=>"Ice tea"],
];




//2D associative nested array
$students = [
    ["name" => "Hong",
     "age" => 15,
     "major" => "ITE", 
     "subject" => ["math", "C++", "Ice tea"]]
      ,
    ["name" => "Thearith",
     "age" => 85, 
     "major" => "ICE Tea",
     "subject" => ["c", "C#", "java"]],
    ["name" => "visal",
     "age" => 20,
     "major" => "laugh",
     "subject" => ["db", "python", "PHP"]]
];



foreach($students as $row =>$col){
    echo "student:".$row+1 ."<br>";
    foreach($col as $key=>$value){
        if(is_array($value)){
            echo $key .":";
            foreach($value as $val){
                echo $val . ",";
            }
        }else{
              echo   $key . ":". $value;

        }
      
    }
    echo "<hr>";
    
}




?>