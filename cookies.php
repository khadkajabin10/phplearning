<?php

setcookie("favfood","momo",time()-0,"/");
setcookie("favgame","football",time()+(86400*3),"/");
//setcookie("favCar","lambo",time()-0,"/");this will remove the cookies
foreach($_COOKIE as $key =>$value){
  echo "your favorites is {$value}<br>";
}
if(isset($_COOKIE["favfood"])){
  echo"{$_COOKIE["favfood"] }";
}
else{
  echo "<br>I dont know your fav<br>";
}
if(isset($_COOKIE["favgame"])){
  echo"{$_COOKIE["favgame"] }";
}
else{
  echo "<br>I dont know your fav<br>";
}
?>