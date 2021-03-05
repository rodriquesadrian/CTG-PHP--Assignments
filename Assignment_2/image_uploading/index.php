<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image uploading</title>
</head>
<body>

<?php

function image($img_name, $width, $height){


    echo '<img src = "'.$img_name.'" width = "'.$width.'" height = "'.$height.'">';



}

image('1.jpg', 500, 500);
image('2.jpg', 500, 500);

?>



</body>
</html>