<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP reverse</title>

</head>
<body>
  <?php
    function rev($text){
      echo "<h1><bdo dir='rtl'>$text</bdo></h1>";
    }
    rev('Hello world');
  ?>
</body>
</html>