<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Official letter</title>
</head>
<body>
<?php
    $people=[
      [
        'name' => 'Arnold',
        'age'  => 15
      ],
      [
        'name' => 'Jacqueline',
        'age'  => 14
      ],
      [
        'name' => 'Adrian',
        'age'  => 19
      ],
      [
        'name' => 'Joseph',
        'age'  => 60
      ],
      [
        'name' => 'Jefferson',
        'age'  => 40
      ],
      [
        'name' => 'Micheal',
        'age'  => 19
      ],
      [
        'name' => 'Daniel',
        'age'  => 37
      ],
      [
        'name' => 'Charles',
        'age'  => 28
      ],
      [
        'name' => 'Marcel',
        'age'  => 66
      ],
      [
        'name' => 'Falex',
        'age'  => 11
      ],
      [
        'name' => 'Jonathan',
        'age'  => 46
      ],
      [
        'name' => 'Stephen',
        'age'  => 37
      ],
      [
        'name' => 'Jerome',
        'age'  => 25
      ],
      [
        'name' => 'Selestina',
        'age'  => 18
      ],
      [
        'name' => 'Marshal',
        'age'  => 20
      ],
      [
        'name' => 'James',
        'age'  => 19
      ],
      [
        'name' => 'Harry',
        'age'  => 17
      ],
      [
        'name' => 'Tony',
        'age'  => 28
      ],
      [
        'name' => 'Wilson',
        'age'  => 39
      ],
      [
        'name' => 'Paul',
        'age'  => 30
      ]
    ];

    foreach($people as $person){

      if($person['age'] >= 40){
        echo "Greetings ".$person['name'].", Hope you have a nice day"."<br><br>";
      }
      elseif($person['age'] >= 18 and $person['age'] <40){
        echo "Welcome ".$person['name']."<br><br>";
      }
      elseif($person['age'] >= 0 and $person['age'] <18){
        echo "Be attentive towards your studies ".$person['name']."<br><br>";
      }
      else{
        echo "Invalid input";
      }
    }
  ?>
</body>
</html>