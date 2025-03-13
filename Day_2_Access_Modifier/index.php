<?php
//Access Modifier
class car {
  public  $name = "VOLVO";
  public  $model = 324;
  public function start(){
     echo "Car in running";
   }
};
// Creat Instance
$mycar = new car();
echo $mycar->name; 
echo "<br>";
echo $mycar -> model;

// 1.  http://localhost/Object_Oriented/Day_2_Access_Modifier/
?>