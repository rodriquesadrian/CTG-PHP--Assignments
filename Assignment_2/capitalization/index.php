<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Capitalization</title>

</head>
<body>
<?php
  function both($text, $both){
    if($both=='big'){
      echo "<h1 style='text-transform:uppercase'>$text</h1>";
    }
    elseif($both=='small'){
      echo "<h1 style='text-transform:lowercase'>$text</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
  both('Hello guys','small');
  ?>
</body>
</html>