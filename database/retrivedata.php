<?php 
include('database.php');

$sql="select *from users";
$result=mysqli_query($conn,$sql);//return object,returned is associative array so 
if(mysqli_num_rows($result)>0){
//$row=mysqli_fetch_assoc($result);//this row is assocative array
while($row=mysqli_fetch_assoc($result)){
echo $row["id"]."<br>";
echo $row["user"]."<br>";
echo $row["reg_date"]."<br>";
}

}//return no of rows we get
else{
  echo"no result found";
}

try{

     mysqli_query($conn,$sql);
     mysqli_close($conn);
}
catch(mysqli_sql_exception){
  echo"could not register user";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  hello ok<br>
</body>
</html>
