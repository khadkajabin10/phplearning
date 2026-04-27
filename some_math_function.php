<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>x:</label><br>
    <input type="text" name="x"><br>
       <label>y:</label><br>
    <input type="text" name="y"><br>
       <label>z:</label><br>
    <input type="text" name="z"><br>
     <label>radius:</label><br>
    <input type="text" name="radius"><br>
    <input type="submit" value="total">
   
  </form>
</body>
</html>
<?php  
$x=$_POST["x"]; 
$y=$_POST["y"];
$z=$_POST["z"];
$radius=$_POST["radius"];
$total=null;
//$total=abs($x); this will change number to absolute i.e -4100 to 4100
//$total=round($x);
//$total=floor($x);//this will round down
//$total=ceil($x);//this will round up
//$total=pow($x,$y);//x to the power y
//$total=sqrt($x);//square root of x
//$total=max($x,$y,$z);//give max value 
//$total=pi();//give pi value
//$total=rand(1,6);//give random value ran(min,max) rand(1,6) between 1 and 6
$circumference=2*pi()*$radius;
echo" circumference = ". $circumference;
echo $total;
?>
