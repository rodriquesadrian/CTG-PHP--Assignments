<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Family phonebook</title>

</head>
<body>
<?php
    $people=[
      [
         'name' => 'Adrian Rodriques',
         'cell' => '01703950001'
      ],
      [
         'name' => 'Henry Rodriques',
         'cell' => '01703950002'
      ],
      [
         'name' => 'Clara Rodriques',
         'cell' => '01703950003'
      ], 
      [  
         'name' => 'Elezabeth Rodriques',
         'cell' => '01703950004'
      ], 
      [  
         'name' => 'Leonard Rodriques',
         'cell' => '01703950005'
      ], 
      [  
         'name' => 'Hamilton Rodriques',
         'cell' => '01703950006'
      ], 
      [  
         'name' => 'Yana Rodriques',
         'cell' => '01703950007'
      ], 
      [  
         'name' => 'Christina Rodriques',
         'cell' => '01703950008'
      ], 
      [  
         'name' => 'Dominic Rodriques',
         'cell' => '01703950009'
      ], 
      [  
         'name' => 'Margaret Rodriques',
         'cell' => '01703950010'
      ], 
      [  
         'name' => 'Juliet Rodriques',
         'cell' => '01703950011'
      ], 
      [  
         'name' => 'Mary Rodriques',
         'cell' => '01703950012'
      ], 
      [  
         'name' => 'Mario Rodriques',
         'cell' => '01703950013'
      ], 
      [  
         'name' => 'Micheal Rodriques',
         'cell' => '01703950014'
      ], 
      [  
         'name' => 'Edward Rodriques',
         'cell' => '01703950015'
      ], 
      [  
         'name' => 'Kingsley Rodriques',
         'cell' => '01703950016'
      ], 
      [  
         'name' => 'Catherine Rodriques',
         'cell' => '01703950017'
      ], 
      [  
         'name' => 'Elizabeth Rodriques',
         'cell' => '01703950018'
      ], 
      [  
         'name' => 'Marcel Rodriques',
         'cell' => '01703950019'
      ], 
      [  
         'name' => 'Julian Rodriques',
         'cell' => '01703950020'
      ]  
    ];

    foreach($people as $person){

        echo "Person Name = ".$person['name']."<br>";
        echo "Cell phone = ".$person['cell']."<hr>";
        
  }

  ?>
</body>
</html>