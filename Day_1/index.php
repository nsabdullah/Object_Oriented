<?php


class car {
  public $name = 'Volvo';
  public $model = 34534;
  public $color = 'Black';


  function start(){
      echo "From inside the start method";
  }
  function stop(){

  }
};

// Creat incetance of object

$mycar = new car();

echo $mycar->model;
echo "<br/>";
echo $mycar->start();

// 1.  http://localhost/Object_Oriented/Day_1/





?>