<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Time table</title>
  
</head>
<body>

  <?php

  $i=1;

  echo "<br>Time Table for 2:<hr><br>";
  for($i=1; $i<=10; $i++){
    echo "2*".$i."=".($i*2)."<br>";
  }

  echo "<br>Time Table for 3:<hr><br>";
  for($i=1; $i<=10; $i++){
    echo "3*".$i."=".($i*3)."<br>";
  }

  echo "<br>Time Table for 4:<hr><br>";
  for($i=1; $i<=10; $i++){
    echo "4*".$i."=".($i*4)."<br>";
  }

  echo "<br>Time Table for 5:<hr><br>";
  for($i=1; $i<=10; $i++){
    echo "5*".$i."=".($i*5)."<br>";
  }

  ?>
</body>
</html>