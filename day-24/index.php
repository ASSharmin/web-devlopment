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
function fullName($fname,$lname) {
  echo $fname ." ". $lname . "<br>";
}

fullName("sharmin","akter");
//associative array
$persons = array("sharmin" =>30, "mim" =>40, "sultana" =>50);
echo $persons["mim"] . "<br>";


 //count
 $cars = array("Toyota", "BMW", "VOLVO");
 echo count($cars) . "<br>";
 for($x = 0; $x < count($cars); $x++){
    echo $cars[$x] . "<br>";
 }

 // super global
 var_dump($_SERVER) ;
 echo "<br>";
 echo $_SERVER["HTTP_HOST"]
?>

</body>
</html>