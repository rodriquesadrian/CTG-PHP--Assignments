<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Picnic donation</title>

</head>
<body>
  <?php
    $people=[
      [
         'name' => 'Adrian Rodriques',
         'cell' => '01703950001'
         'location'=>'Mirpur',
         'money'=>100
      ],
      [
         'name' => 'Henry Rodriques',
         'cell' => '01703950002'
         'location'=>'Banani',
         'money'=>150
      ],
      [
         'name' => 'Clara Rodriques',
         'cell' => '01703950003'
         'location'=>'Bashundhara',
         'money'=>190
      ],
      [
         'name' => 'Elezabeth Rodriques',
         'cell' => '01703950004'
         'location'=>'Uttara',
         'money'=>250
      ],
      [
         'name' => 'Leonard Rodriques',
         'cell' => '01703950005'
         'location'=>'Mirpur',
         'money'=>200
      ],
      [
         'name' => 'Hamilton Rodriques',
         'cell' => '01703950006'
         'location'=>'Banani',
         'money'=>90
      ],
      [
         'name' => 'Yana Rodriques',
         'cell' => '01703950007'
         'location'=>'Banani',
         'money'=>160
      ],
      [
         'name' => 'Christina Rodriques',
         'cell' => '01703950008'
         'location'=>'Bashundhara',
         'money'=>290
      ],
      [
         'name' => 'Dominic Rodriques',
         'cell' => '01703950009'
         'location'=>'Uttara',
         'money'=>270
      ],
      [
         'name' => 'Margaret Rodriques',
         'cell' => '01703950010'
         'location'=>'Mirpur',
         'money'=>120
      ],
      [
         'name' => 'Juliet Rodriques',
         'cell' => '01703950011'
         'location'=>'Banani',
         'money'=>170
      ],
      [
         'name' => 'Mary Rodriques',
         'cell' => '01703950012'
         'location'=>'Mirpur',
         'money'=>250
      ],
      [
         'name' => 'Mario Rodriques',
         'cell' => '01703950013'
         'location'=>'Banani',
         'money'=>195
      ],
      [
         'name' => 'Micheal Rodriques',
         'cell' => '01703950014'
         'location'=>'Bashundhara',
         'money'=>310
      ],
      [
         'name' => 'Edward Rodriques',
         'cell' => '01703950015'
         'location'=>'Uttara',
         'money'=>370
      ],
      [
         'name' => 'Kingsley Rodriques',
         'cell' => '01703950016'
         'location'=>'Banani',
         'money'=>285
      ],
      [
         'name' => 'Catherine Rodriques',
         'cell' => '01703950017'
         'location'=>'Mirpur',
         'money'=>260
      ],
      [
         'name' => 'Elizabeth Rodriques',
         'cell' => '01703950018'
         'location'=>'Banani',
         'money'=>175
      ],
      [
         'name' => 'Marcel Rodriques',
         'cell' => '01703950019'
         'location'=>'Uttara',
         'money'=>95
      ],
      [
         'name' => 'Julian Rodriques',
         'cell' => '01703950020'
         'location'=>'Banani',
         'money'=>100
      ]
    ];

    foreach($people as $person){

        echo "Person Name = ".$person['name']."<br>";
        echo "Cell phone = ".$person['cell']."<br>";
        echo "Student address = ".$person['location']."<br>";
        echo "Money given = ".$person['money']."<hr>";
        
  }
  $total=0;
        for($i=0; $i<=20; $i++){
          $total=$person['money']+$total;
        }
        echo "Total money = ".$total;
  ?>
</body>
</html>