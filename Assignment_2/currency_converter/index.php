<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Currency converter</title>

</head>
<body>
  <?php
    function taka($tk,$country){
      if($country=='us'){
        $money=$tk/85;
        echo "<h1>You have $tk tk which is $$money in US currency.</h1>";
      }
      elseif($country=='cn'){
        $money=$tk/67;
        echo "<h1>You have $tk tk which is $$money in Canadian currency.</h1>";
      }
      elseif($country=='uk'){
        $money=$tk/116;
        echo "<h1>You have $tk tk which is &pound$money in UK currency.</h1>";
      }
      else{
        echo "Invalid input";
      }
    }
    taka(100,'uk');
  ?>
</body>
</html>