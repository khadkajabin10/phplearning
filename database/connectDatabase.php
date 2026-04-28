<?php 
include('database.php');
$username="nischal";
$password="jabin";
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql="insert into users(user,password)
     values('$username','$hash')";
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
  hello ok
</body>
</html>
