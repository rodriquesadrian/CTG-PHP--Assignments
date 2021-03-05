<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade System</title>
</head>
<body>
<?php

$Bangla = 70;
$English = 85;
$Math = 80;
$Geography = 90;


$A_plus= 5;
$A = 4;
$A_minus = 3.5;
$B = 3;
$C = 2;
$D = 1;
$F = 0;



$gpa = 0;

//Bangla

if($Bangla>=80){
    echo "You get A+ in Bangla and your grade point is $A_plus <br>";

    $Bangla = $A_plus;
}
elseif ($Bangla>=70){

    echo "You get A in Bangla and your grade point is $A<br>";
    $Bangla = $A;

}
elseif ($Bangla>=60){

    echo "You get A- in Bangla and your grade point is $A_minus <br>";
    $Bangla = $A_minus;
}
elseif ($Bangla>=50){
    echo "You get B in Bangla<br>";
    $Bangla = $B;

}
elseif ($Bangla>=40){
    echo "You get C in Bangla<br>";
    $Bangla = $C;

}
elseif ($Bangla>=30){
    echo "You get D in Bangla<br>";
    $Bangla = $D;

}
else{
    echo "You get F in Bangla<br>";
    $Bangla = $F;

}
//English
if($English>=80){
    echo "You get A+ in English<br>";
    $English= $A_plus;

}
elseif ($English>=70){

    echo "You get A in English and your grade point is $A <br>";
    $English= $A;


}

elseif ($English>=60){

    echo "You get A- in English<br>";
    $English= $A_minus;
}

elseif ($English>=50){

    echo "You get B in English<br>";
    $English= $B;
}
elseif ($English>=40){
    echo "You get C in English<br>";
    $English= $C;

}
elseif ($English>=30){

    echo "You get D in English<br>";
    $English= $D;
}
else{
    echo "You get F in English<br>";
    $English = $F;

}

if ($Math>=80){

    echo "<h1>You get A+ in Math and your grade point is $A_plus </h1><br>";
    $Math= $A_plus;
}
elseif ($Math>=70){

    echo "You get A in Math<br>";
    $Math= $A;
}
elseif ($Math>=60){

    echo "You get A- in Math<br>";
    $Math= $A_minus;
}
elseif ($Math>=50){

    echo "You get B in Math<br>";
    $Math= $B;
}
elseif ($Math>=40){

    echo "You get C in Math<br>";
    $Math= $C;

}
elseif ($Math>=30){
    echo "You get D in Math<br>";
    $Math= $D;

}
else{
    echo "You get F in Math<br>";
    $Math = $F;

}


if ($Geography>=80){

    echo "You get A+ in Geography<br>";
    $Geography= $A_plus;
}
elseif ($Geography>=70){

    echo "<h2>You get A in Geography and your grade point is $A</h2><br>";
    $Geography= $A;
}
elseif ($Geography>=60){
    echo "You get A- in Geography<br>";
    $Geography= $A_minus;

}
elseif ($Geography>=50){
    echo "You get B in Geography<br>";
    $Geography= $B;

}
elseif ($Geography>=40){

    echo "You get C in Geography<br>";
    $Geography= $C;
}
elseif ($Geography>=30){
    echo "You get D in Geography<br>";
    $Geography= $D;

}
else{
    echo "You get F in Geography<br>";
    $Geography = $F;

}






?>


</body>
</html>