<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Loop function</title>


</head>
<body>
  <?php
    $i=10000;
    echo "This is increment<br>";
    for($i=10000; $i<10050; $i++){
      echo $i."<br>";
    }
    echo"This is decrement<br>";
    for($i=10000; $i>9950; $i--){
      echo $i."<br>";
    }
  ?>
</body>
</html>