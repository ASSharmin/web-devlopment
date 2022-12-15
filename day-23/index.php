<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
// associative array
$student = array("sohana" => 500, "sharmin" => 1000,"sultana" =>12,"ruma" =>143,"amena" =>56,"armin" =>89);
// echo $student[0];
 foreach($student as $name => $tk){
    echo $name ." : ". $tk;
    echo "<br>";
 }
 //function
 function Sum($x,$y){
    return $x+$y;
 }
 $v = Sum(4,5);
 echo $v. "<br>";

 $v2 = Sum(10,20);
 echo $v2 ;
 echo  "<br>";

 // simple
 function simple($x,$y){
    $z =$x*$x+3*$x+9*$y+6*($y*$y)+32*$x+7*($y*$y*$y);
    return $z;
   
 }
 echo simple(3,7);
 echo  "<br>";
 $val = simple(12,30);
 echo $val;

 // indexed array
 $cars = array ("Volvo","BMW","Toyta");
 $arrlenght = count($cars);

 for($x = 0;$x < $arrlenght; $x++){
    echo  $cars[$x];
    echo "<br>";

 }

    ?>
</body>
</html>