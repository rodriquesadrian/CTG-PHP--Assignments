<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic heading</title>
</head>
<body>

<?php
   function heading($header, $tag='h2', $align='center', $color='red', $font='Arial'){
      echo "<$tag style='text-align:$align; color:$color; font-family:$font'>$header</$tag>";
   }
   heading('HELLO EVERYONE','h1','center','#011627','Broadway');
?>
</body>
</html>