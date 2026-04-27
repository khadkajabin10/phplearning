<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="associative_array.php" method="post">
    <label>Give me contry:</label><br>
    <input type="text" name="country"><br>
    
    <input type="submit" value="Enter">
    <!-- or<button type="submit">Log in</button>  -->
  </form>
</body>
</html>
<?php
//associative array =array in pair and value countries=>capital like this
$capitals = [
  "Nepal" => "Kathmandu",
  "India" => "New Delhi",
  "China" => "Beijing",
  "Japan" => "Tokyo",
  "South Korea" => "Seoul",
  "USA" => "Washington, D.C.",
  "Canada" => "Ottawa",
  "UK" => "London",
  "France" => "Paris",
  "Germany" => "Berlin",
  "Italy" => "Rome",
  "Spain" => "Madrid",
  "Russia" => "Moscow",
  "Australia" => "Canberra",
  "New Zealand" => "Wellington",
  "Brazil" => "Brasília",
  "Argentina" => "Buenos Aires",
  "Mexico" => "Mexico City",
  "South Africa" => "Pretoria",
  "Egypt" => "Cairo",
  "Turkey" => "Ankara",
  "Saudi Arabia" => "Riyadh",
  "UAE" => "Abu Dhabi",
  "Pakistan" => "Islamabad",
  "Bangladesh" => "Dhaka",
  "Sri Lanka" => "Sri Jayawardenepura Kotte",
  "Thailand" => "Bangkok",
  "Indonesia" => "Jakarta",
  "Malaysia" => "Kuala Lumpur",
  "Singapore" => "Singapore"
];
$country=$_POST["country"];//get country similarly
$capital= $capitals["{$_POST["country"]}"];
echo "Its capital city is {$capital}";



/*
echo "{$capitals["Nepal"]} <br>";//this will access value of key i.e nepal
$capitals["Nepal"]="gorkha";//to change value we access key
$capitals["china"]="Beijing";//to add new pair
// array_pop will remove last
//to access all key there is method , arry_keys , //this will give new array so 


$keys=array_keys($capitals);
foreach($keys as $key){
  echo "{$key} <br>";
}
foreach($capitals as $key=>$value){
  echo "{$key} and its capital {$value} <br>";
}
//you can also flip the arrays key and value by array_flip() it retruns new array
array_flip($capitals);
echo"<br><br>";
foreach($capitals as $key=>$value){
  echo "{$key}'s  capital is {$value} <br>";
}
//fun fact we use <br> becuase output in browser not terminal so Browser understands HTML, not \n
*/


?>