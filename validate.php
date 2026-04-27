
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="validate.php" method="post">
    <label>username:</label><br>
    <input type="text" name="username"><br>
     <label>age:</label><br>
    <input type="text" name="age"><br>
    <label>email:</label><br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="log in">
  
  </form>
</body>
</html>
<?php  
if(isset($_POST["login"])){
 /*  sanitization
 $username=filter_input(INPUT_POST,"username",
              FILTER_SANITIZE_SPECIAL_CHARS);
  $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
  $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

  echo "you are {$age} year old<br>";
  
  echo "you are {$username}<br>";
    echo "your email is {$email}<br>";*/
    //validation=if it doesnt pass then it return empty string
    $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
     $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    if(empty($age)){
      echo"<br>that number wasnt valid";
    }
    else{
      echo"<br> you are {$age }yeres old";
    }
    if(empty($email)){
      echo"<br>that emaill wasnt valid<br>";
    }
    else{
      echo"<br> your email is {$email }";
    }


}
?>
