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
    class Fruit{
        public $name ;
        public $color ;

        function get_fruit_name(){
            return $this->name;

        }
        function set_fruit_name($x){
            $this->name = $x; 
        }
        function get_fruit_color(){
            return $this->color;

        }
        function set_fruit_color($x){
            $this->color = $x; 
        }

    }
    $apple = new Fruit();
    $mango = new Fruit();
    $banana = new Fruit();
    $oranhe = new Fruit();
    $anar = new Fruit();


    $apple->set_fruit_name("apple"); 
    $apple->set_fruit_color("white"); 

    $mango->set_fruit_name("mango"); 
    $mango->set_fruit_color("red"); 


    echo $apple->get_fruit_name();
    echo "<br>";
    echo $apple->get_fruit_color();
    echo "<br>";
    echo $mango->get_fruit_name();
    echo "<br>";
    echo $mango->get_fruit_color();

    $banana->set_fruit_name("banana"); 
    $banana->set_fruit_color("white"); 

    $oranhe->set_fruit_name("oranhe"); 
    $oranhe->set_fruit_color("red"); 


    echo $banana->get_fruit_name();
    echo "<br>";
    echo $banana->get_fruit_color();
    echo "<br>";
    echo $oranhe->get_fruit_name();
    echo "<br>";
    echo $oranhe->get_fruit_color();


    ?>
</body>
</html>