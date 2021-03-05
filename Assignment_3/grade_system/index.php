<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grades system</title>

</head>
<body>
  <?php
    $students=[
      [
        'name'    => 'Stanley',
        'age'     => '11',
        'cell'    => '01703950020',
        'location'=>'Mirpur',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Adrian',
        'age'     => '11',
        'cell'    => '01703950021',
        'location'=> 'Banani',
        'marks'   => [80,110,70,65,55]
      ],
      [
        'name'    => 'James',
        'age'     => '11',
        'cell'    => '01703950022',
        'location'=> 'Bashundhara',
        'marks'   => [70,75,60,50,45]
      ],
      [
        'name'    => 'Rose',
        'age'     => '11',
        'cell'    => '01703950023',
        'location'=> 'Uttara',
        'marks'   => [80,90,85,89,85]
      ],
      [
        'name'    => 'Selestina',
        'age'     => '11',
        'cell'    => '01712345605',
        'location'=> 'Mirpur',
        'marks'   => [40,90,80,75,85]
      ],
      [
        'name'    => 'Jerome',
        'age'     => '11',
        'cell'    => '01712345606',
        'location'=> 'Tejgaon',
        'marks'   => [89,90,69,75,71]
      ],
      [
        'name'    => 'George',
        'age'     => '11',
        'cell'    => '01712345607',
        'location'=> 'Banani',
        'marks'   => [80,70,75,75,85]
      ],
      [
        'name'    => 'Stephen',
        'age'     => '11',
        'cell'    => '01712345608',
        'location'=> 'Bashundhara',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Jonathan',
        'age'     => '11',
        'cell'    => '01712345609',
        'location'=> 'Uttara',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Falex',
        'age'     => '11',
        'cell'    => '01712345611',
        'location'=> 'Tejgaon',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Marcel',
        'age'     => '11',
        'cell'    => '01712345611',
        'location'=> 'Banani',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Charles',
        'age'     => '11',
        'cell'    => '01712345612',
        'location'=> 'Mirpur',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Jefferson',
        'age'     => '11',
        'cell'    => '01712345613',
        'location'=> 'Farmgate',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Daniel',
        'age'     => '11',
        'cell'    => '01712345614',
        'location'=> 'Bashundhara',
        'marks'   => [80,90,70,75,85]
      ],
      [
        'name'    => 'Arnold',
        'age'     => '11',
        'cell'    => '01712345615',
        'location'=> 'Uttara',
        'marks'   => [70,65,60,50,45]
      ],
      [
        'name'    => 'Jacqueline',
        'age'     => '11',
        'cell'    => '01712345616',
        'location'=> 'Banani',
        'marks'   => [80,90,90,75,85]
      ],
      [
        'name'    => 'Micheal',
        'age'     => '11',
        'cell'    => '01712345617',
        'location'=> 'Farmgate',
        'marks'   => [80,90,70,75,85]
      ]
    ];

    foreach($students as $student){

        echo "Student Name = ".$student['name']."<br>";
        echo "Age  = ".$student['age']."<br>";
        echo "Cell phone = ".$student['cell']."<br>";
        echo "Student address = ".$student['location']."<br>";
        if($student['marks'][0]>=80 and $student['marks'][0] <= 110){
          echo "You got = ".$student['marks'][0]." in English and your grade is A+"."<br>";
          $engGrade=4;
        }
        elseif($student['marks'][0]>=75 and $student['marks'][0] <= 79){
          echo "You got = ".$student['marks'][0]." in English and your grade is A"."<br>";
          $engGrade=3.5;
        }
        elseif($student['marks'][0]>=70 and $student['marks'][0] <= 74){
          echo "You got = ".$student['marks'][0]." in English and your grade is B+"."<br>";
          $engGrade=3;
        }
        elseif($student['marks'][0]>=65 and $student['marks'][0] <= 69){
          echo "You got = ".$student['marks'][0]." in English and your grade is B"."<br>";
          $engGrade=2.5;
        }
        elseif($student['marks'][0]>=60 and $student['marks'][0] <= 64){
          echo "You got = ".$student['marks'][0]." in English and your grade is C+"."<br>";
          $engGrade=2;
        }
        elseif($student['marks'][0]>=55 and $student['marks'][0] <= 59){
          echo "You got = ".$student['marks'][0]." in English and your grade is C"."<br>";
          $engGrade=1.5;
        }
        elseif($student['marks'][0]>=50 and $student['marks'][0] <= 54){
          echo "You got = ".$student['marks'][0]." in English and your grade is D"."<br>";
          $engGrade=1;
        }
        elseif($student['marks'][0]>=0 and $student['marks'][0] <= 49){
          echo "You got = ".$student['marks'][0]." in English and your grade is F"."<br>";
          $engGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][1]>=80 and $student['marks'][1] <= 110){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is A+"."<br>";
          $bangGrade=4;
        }
        elseif($student['marks'][1]>=75 and $student['marks'][1] <= 79){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is A"."<br>";
          $bangGrade=3.5;
        }
        elseif($student['marks'][1]>=70 and $student['marks'][1] <= 74){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is B+"."<br>";
          $bangGrade=3;
        }
        elseif($student['marks'][1]>=65 and $student['marks'][1] <= 69){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is B"."<br>";
          $bangGrade=2.5;
        }
        elseif($student['marks'][1]>=60 and $student['marks'][1] <= 64){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is C+"."<br>";
          $bangGrade=2;
        }
        elseif($student['marks'][1]>=55 and $student['marks'][1] <= 59){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is C"."<br>";
          $bangGrade=1.5;
        }
        elseif($student['marks'][1]>=50 and $student['marks'][1] <= 54){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is D"."<br>";
          $bangGrade=1;
        }
        elseif($student['marks'][1]>=0 and $student['marks'][1] <= 49){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is F"."<br>";
          $bangGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][2]>=80 and $student['marks'][2] <= 110){
          echo "You got = ".$student['marks'][2]." in Math and your grade is A+"."<br>";
          $mathGrade=4;
        }
        elseif($student['marks'][2]>=75 and $student['marks'][2] <= 79){
          echo "You got = ".$student['marks'][2]." in Math and your grade is A"."<br>";
          $mathGrade=3.5;
        }
        elseif($student['marks'][2]>=70 and $student['marks'][2] <= 74){
          echo "You got = ".$student['marks'][2]." in Math and your grade is B+"."<br>";
          $mathGrade=3;
        }
        elseif($student['marks'][2]>=65 and $student['marks'][2] <= 69){
          echo "You got = ".$student['marks'][2]." in Math and your grade is B"."<br>";
          $mathGrade=2.5;
        }
        elseif($student['marks'][2]>=60 and $student['marks'][2] <= 64){
          echo "You got = ".$student['marks'][2]." in Math and your grade is C+"."<br>";
          $mathGrade=2;
        }
        elseif($student['marks'][2]>=55 and $student['marks'][2] <= 59){
          echo "You got = ".$student['marks'][2]." in Math and your grade is C"."<br>";
          $mathGrade=1.5;
        }
        elseif($student['marks'][2]>=50 and $student['marks'][2] <= 54){
          echo "You got = ".$student['marks'][2]." in Math and your grade is D"."<br>";
          $mathGrade=1;
        }
        elseif($student['marks'][2]>=0 and $student['marks'][2] <= 49){
          echo "You got = ".$student['marks'][2]." in Math and your grade is F"."<br>";
          $mathGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][3]>=80 and $student['marks'][3] <= 110){
          echo "You got = ".$student['marks'][3]." in Science and your grade is A+"."<br>";
          $scGrade=4;
        }
        elseif($student['marks'][3]>=75 and $student['marks'][3] <= 79){
          echo "You got = ".$student['marks'][3]." in Science and your grade is A"."<br>";
          $scGrade=3.5;
        }
        elseif($student['marks'][3]>=70 and $student['marks'][3] <= 74){
          echo "You got = ".$student['marks'][3]." in Science and your grade is B+"."<br>";
          $scGrade=3;
        }
        elseif($student['marks'][3]>=65 and $student['marks'][3] <= 69){
          echo "You got = ".$student['marks'][3]." in Science and your grade is B"."<br>";
          $scGrade=2.5;
        }
        elseif($student['marks'][3]>=60 and $student['marks'][3] <= 64){
          echo "You got = ".$student['marks'][3]." in Science and your grade is C+"."<br>";
          $scGrade=2;
        }
        elseif($student['marks'][3]>=55 and $student['marks'][3] <= 59){
          echo "You got = ".$student['marks'][3]." in Science and your grade is C"."<br>";
          $scGrade=1.5;
        }
        elseif($student['marks'][3]>=50 and $student['marks'][3] <= 54){
          echo "You got = ".$student['marks'][3]." in Science and your grade is D"."<br>";
          $scGrade=1;
        }
        elseif($student['marks'][3]>=0 and $student['marks'][3] <= 49){
          echo "You got = ".$student['marks'][3]." in Science and your grade is F"."<br>";
          $scGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][4]>=80 and $student['marks'][4] <= 110){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is A+"."<br>";
          $geoGrade=4;
        }
        elseif($student['marks'][4]>=75 and $student['marks'][4] <= 79){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is A"."<br>";
          $geoGrade=3.5;
        }
        elseif($student['marks'][4]>=70 and $student['marks'][4] <= 74){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is B+"."<br>";
          $geoGrade=3;
        }
        elseif($student['marks'][4]>=65 and $student['marks'][4] <= 69){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is B"."<br>";
          $geoGrade=2.5;
        }
        elseif($student['marks'][4]>=60 and $student['marks'][4] <= 64){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is C+"."<br>";
          $geoGrade=2;
        }
        elseif($student['marks'][4]>=55 and $student['marks'][4] <= 59){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is C"."<br>";
          $geoGrade=1.5;
        }
        elseif($student['marks'][4]>=50 and $student['marks'][4] <= 54){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is D"."<br>";
          $geoGrade=1;
        }
        elseif($student['marks'][4]>=0 and $student['marks'][4] <= 49){
          echo "You got = ".$student['marks'][4]." in Geography and your grade is F"."<br>";
          $geoGrade=0;
        }
        else{
          echo "Invalid input";
        }
        $total=0;
        $cg=0;
        foreach($student['marks'] as $mark){
          $total+=$mark;
        }
        $cg=($geoGrade+$scGrade+$mathGrade+$bangGrade+$engGrade)/5;
        echo "Total mark = ".$total."<br>";
        echo "Your CGPA is = ".$cg."<hr>";
      }
  ?>
</body>
</html>