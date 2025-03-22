<?php

class Human{
  public $name = "Abdullah";
  


  public function __construct(){
    echo "dryjetyj";
  }
  public function sayName(){


    echo $this->name;


  }

}
$human = new Human();



$human -> sayName();






// http://localhost/Object_Oriented/Day_5_Constractor/
?>