<?php
function happybirthday($firstname){
  echo "happy birtday to you<br>";
  echo "happy birthday to {$firstname}<br>";
  //some string function
  echo strtolower($firstname)."<br>";
  echo str_pad($firstname,20,"g")."<br>";
  echo strrev($firstname)."<br>";
}
happybirthday("RAM");
happybirthday('shyam');
?>