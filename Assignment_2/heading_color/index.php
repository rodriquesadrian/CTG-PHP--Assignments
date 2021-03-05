<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heading color</title>

</head>
<body>
  <?php
    function heading($header,$color){
      if($color=='red'){
      echo "<h1 style='text-align:center; color:red'>$header</h1>";
    }
    elseif($color=='green'){
      echo "<h1 style='text-align:center; color:green'>$header</h1>";
    }
    elseif($color=='blue'){
      echo "<h1 style='text-align:center; color:blue'>$header</h1>";
    }
    elseif($color=='blue'){
      echo "<h1 style='text-align:center; color:purple'>$header</h1>";
    }
    elseif($color=='black'){
      echo "<h1 style='text-align:center; color:black'>$header</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
    heading('Hello everyone','black');
  ?>
</body>
</html>