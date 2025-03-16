<?php
// Creat OOP
class Men {
    public $name = 'Abdur Rahman';
    public $age = 22;
    public function sayHello(){
      echo "Welcome ";
    }
    public function You(){
      echo "Your age ";
    }
};
// Creat Intance & use
/*
$men = new Men();
$men ->  sayHello();
echo  $men ->  name; echo "<br/>";
$men -> You();
echo $men -> age;
 */
class abdurRahman extends Men {
}
$Rahman = new abdurRahman;
$Rahman -> sayHello();
// 1.  http://localhost/Object_Oriented/Day_3_Inheritance/
?>