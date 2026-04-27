<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="inset()_and_empty().php" method="post">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="log in">
    <!-- or<button type="submit">Log in</button>  
     note only inputs with a name attribute are sent to PHP.so  -->
  </form>
</body>
</html>
<?php
foreach($_POST as $key=>$value){//post has 3thing so 
echo "{$key}={$value} <br>";
};
if(isset($_POST["login"])){//o array so [] not (login)
  /* 
Before clicking submit
$_POST is empty
$_POST["login"] does NOT exist
 After clicking submit
Form sends data to PHP
Now $_POST is filled
$_POST["login"] exists (ONLY if button has name="login")
*/
$username=$_POST["username"];
$password=$_POST["password"];
if(empty($username)&&empty($password)){
  echo"Enter username and password ";

}elseif(empty($username)){
  echo"Username is empty";
}
elseif(empty($password)){
  echo"Password is empty";

}
else{
  echo"hello {$username}";
}


}
?>