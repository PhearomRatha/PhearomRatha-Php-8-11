<?php
//use P$_POST to P$_POST data from form but not secure 

if(isset($_POST['send'])){
    // 110+110+110+110+110
    $code  = $_POST['code'];
    $name = $_POST['name'];
    $qty= $_POST['qty'];
    $price = $_POST['price'];

    $total = $qty*$price;
    if($total >=1 && $total<10){
        $dis=10;
    }else if($total>=10 && $total<20){
        $dis=20;
    }else if($total>=20 && $total<30){
        $dis=30;
    }else if($total>=30 && $total<40){
        $dis=40;
    }else if($total>=40 && $total<50){
        $dis=50;
    }else if($total>=50 && $total<60){
        $dis=60;
    }else if($total>=60 ){
        $dis=70;
    }
    $payment = $total -($total* $dis)/100;
             // 10 - 10*20/100
             // 10 - 2= 8

    echo "
      <tr>
            <td>$code</td>
            <td>$name</td>
            <td>$qty</td>
            <td>$price</td>
            <td>$total</td>
            <td>$payment</td>
            
        </tr>";


}






?>