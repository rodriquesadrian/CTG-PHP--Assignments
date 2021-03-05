<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Birth year</title>

</head>
<body>
  <?php
    function age(int $birthyear){
      $agee=date('Y')-$birthyear;
      echo "<h1>You are $agee years old.</h1>";
    }
   age(2002);
  ?>
</body>
</html> 