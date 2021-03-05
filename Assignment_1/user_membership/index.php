<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User membership</title>

</head>
<body>


<?php

$member = 1000;

switch ($member){

   case 750 :
      echo "<span style='color: #000000;'><h1>You have become our premium member</h1></span>";
        break;

   case 1000 :
      echo "<span style='color: #DD933A;'><h2>You have become our gold member</h2></span>";
        break;

   case 1500 :
      echo "<span style='color: #B92C27;'><h2>You have become our platinum member</h2></span>";
        break;

   default :
      echo "<span style='color: #011627;'><h3>You need some more time to enter our club</h3></span>";
}

?>
</body>
</html>