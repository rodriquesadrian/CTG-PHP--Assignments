<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age recogniton</title>
</head>
<body>

<?php
function info(string $name, int $birth_year){

   $age = date('Y')- $birth_year;

echo "<span style='color: #011627;'>Hello $name You are $age years old</span><hr>";
}


info('John', 1980);
info('Adrian', 2002);
info('James', 2000);
info('Stanley', 2002);
info('Elizabeth', 1995);

?>

</body>
</html>