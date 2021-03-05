<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Student Address</title>
</head>
<body>
  <?php
    $students=[
      [
        'name'    => 'Stanley',
        'age'     => '11',
        'cell'    => '01703950020',
        'location'=>'Mirpur',
      ],
      [
        'name'    => 'Adrian',
        'age'     => '11',
        'cell'    => '01703950021',
        'location'=> 'Banani',
      ],
      [
        'name'    => 'James',
        'age'     => '11',
        'cell'    => '01703950022',
        'location'=> 'Bashundhara',
      ],
      [
        'name'    => 'Rose',
        'age'     => '11',
        'cell'    => '01703950023',
        'location'=> 'Uttara',
      ],
      [
        'name'    => 'Selestina',
        'age'     => '11',
        'cell'    => '01712345605',
        'location'=> 'Mirpur',
      ],
      [
        'name'    => 'Jerome',
        'age'     => '11',
        'cell'    => '01712345606',
        'location'=> 'Tejgaon',
      ],
      [
        'name'    => 'George',
        'age'     => '11',
        'cell'    => '01712345607',
        'location'=> 'Banani',
      ],
      [
        'name'    => 'Stephen',
        'age'     => '11',
        'cell'    => '01712345608',
        'location'=> 'Bashundhara',
      ],
      [
        'name'    => 'Jonathan',
        'age'     => '11',
        'cell'    => '01712345609',
        'location'=> 'Uttara',
      ],
      [
        'name'    => 'Falex',
        'age'     => '11',
        'cell'    => '01712345611',
        'location'=> 'Tejgaon',
      ],
      [
        'name'    => 'Marcel',
        'age'     => '11',
        'cell'    => '01712345611',
        'location'=> 'Banani',
      ],
      [
        'name'    => 'Charles',
        'age'     => '11',
        'cell'    => '01712345612',
        'location'=> 'Mirpur',
      ],
      [
        'name'    => 'Jefferson',
        'age'     => '11',
        'cell'    => '01712345613',
        'location'=> 'Farmgate',
      ],
      [
        'name'    => 'Daniel',
        'age'     => '11',
        'cell'    => '01712345614',
        'location'=> 'Bashundhara',
      ],
      [
        'name'    => 'Arnold',
        'age'     => '11',
        'cell'    => '01712345615',
        'location'=> 'Uttara',
      ],
      [
        'name'    => 'Jacqueline',
        'age'     => '11',
        'cell'    => '01712345616',
        'location'=> 'Banani',
      ],
      [
        'name'    => 'Micheal',
        'age'     => '11',
        'cell'    => '01712345617',
        'location'=> 'Farmgate',
      ]
    ];

    foreach($students as $student){

      if($student['location']=='Banani' or $student['location']=='Mirpur'){
        echo "Student Name = ".$student['name']."<br>";
        echo "Age  = ".$student['age']."<br>";
        echo "Cell phone = ".$student['cell']."<br>";
        echo "Student address = ".$student['location']."<hr>";
      }
      else{
      }
    }
  ?>
</body>
</html>