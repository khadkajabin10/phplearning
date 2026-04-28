<?php 
include('database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
  <h2>Welcome to Fakebook</h2>
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="register">
</form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
   $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($username)&&empty($password)){
  echo "please enter a username and password";
}
elseif(empty($username)){
  echo "please enter a username";
}elseif(empty($password)){
   echo "please enter a password";
}else{
  $hash=password_hash($password,PASSWORD_DEFAULT);
  $sql="insert into login(user,password)
  values('$username','$hash')";
  try{
 mysqli_query($conn,$sql);
  echo"<br>You are now registered!";
  }catch(mysqli_sql_exception){
    echo"That username is taken";
  }
 
  
}
}
mysqli_close($conn);
?>
