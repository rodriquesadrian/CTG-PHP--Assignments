<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student appreciation</title>
</head>
<body>
<?php

$marks = 95;
$name = "James ";

if($name =='Augustine ' || $name =='James ' || $name =='Adrian ' || $name =='Stanley ' || $name =='Elizabeth'){
   $rel = "bhai";

}else{
    $rel = "apu";

}

if ($marks>=0 && $marks<=32){
    echo $name."<span style='color: red;'>$rel You've failed in your exams, better luck next time </span>";

}
elseif ($marks>=33 && $marks<=40){
    echo $name."<span style='color: blue;'>$rel You got a C grade in your exams</span>";

}
elseif ($marks>=50 && $marks<=59){

    echo $name."<span style='color: orangered;'>$rel You got a B grade in your exams</span>";
}
elseif ($marks>=60 && $marks<=69){

    echo $name."<span style='color: green;'>$rel You got an A- in your exams</span>";
}
elseif ($marks>=70 && $marks<=79){

    echo $name."<span style='color: black;'>$rel You got and A in your exams</span>";
}
elseif ($marks>=80 && $marks<=100){

    echo $name."<span style='color: blue;'>$rel You got an A+ in your exams, Congratulations</span>";
}
else{

    echo "apnarjonno shuvo kamona";
}





?>

</body>
</html>