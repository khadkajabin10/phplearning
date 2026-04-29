<?php 
function calculateAverage($numbers) { 
return array_sum($numbers) / 
count($numbers); 
} 
$testArray = [7, 9, 12]; 
echo calculateAverage($testArray); 
echo"<br>by Jabin Khadka";
?>  