<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="log in">
    <!-- or<button type="submit">Log in</button>  -->
  </form>
</body>
</html>
<?php  
 echo $_GET['username'] . "<br>";//con cat with .
 //or echo "{$_GET['username']} <br>"
  echo $_GET['password'] ;
  //in get data is appended to the url 
  // in post data is package inside the body of the htttp request
?>
