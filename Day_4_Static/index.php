<?php

class home {
  public static $room = 6;
  public static function unite() {
    echo "2";
  }
}
// Use without incetance
echo home::$room;
home::unite();












// http://localhost/Object_Oriented/Day_4_Static/
?>