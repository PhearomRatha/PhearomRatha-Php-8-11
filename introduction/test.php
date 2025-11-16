<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
  <?Php
  $colors = ['red','green','yellow'];
  for($i=0;$i<count($colors);$i++){
    echo '  <div class="box" style="width: 200px;height:200px;background-color:'.$colors[$i].'">
    '.($i+1).'

  </div> ';

  }









?>
</body>
</html>