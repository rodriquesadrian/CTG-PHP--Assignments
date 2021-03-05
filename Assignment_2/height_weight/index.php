<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Height and weight</title>

</head>
<body>
  <?php
   function bmi($weight,$height){
      $bodymass=$weight/($height*$height);
      echo "<h1>Your weight is $weight kg, height is $height m <br> BMI is $bodymass kg/m<sup>2</sup>.</h1>";
   }
    bmi(60,1.73736);
  ?>
</body>
</html>