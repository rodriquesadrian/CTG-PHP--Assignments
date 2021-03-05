<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area calculation</title>
</head>
<body>

<?php
function area($txt, $width, $length, $radius){

    $area_squ = $length*$length;
    $area_cir = 3.1416*$radius*$radius;
    $area_rec = $width*$length;

    if ($txt == "rectangle") {

        echo "<span style='color: brown;'>The area of rec is $area_rec<hr></span>";


    } elseif ($txt == "circle") {

        echo "<span style='color:blue;'>The area of circle is $area_cir<hr></span>";


    } elseif ($txt == "square") {

        echo "The area of square is  $area_squ<hr>";


    } else {

        echo "error";
    }
}

area('rectangle', 85, 20, 50);

area('circle', 20, 40, 15);
area('square', 50, 75, 25);



?>
</body>
</html>