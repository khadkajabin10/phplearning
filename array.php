<?php
 $foods=[
  'apple',
  'banana',
  'nango'
 ];
 array_push($foods, "pineapple");
 array_pop($foods);
 //remove last element in array
 array_shift($foods);
 //remove first element in array
 $reversedfoods=array_reverse($foods);//this give new arrya so we need new array
 /*
 $food = array();   // old style
$food = [];        // modern shorthand 
 */
echo count($foods);
foreach($foods as $food){
  echo "{$food} <br>";
  
}
foreach($reversedfoods as $food){
  echo "{$food} <br>";
  
}
?>