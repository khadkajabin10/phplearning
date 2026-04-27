<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="checkbox.php" method="post">
    
    <input type="checkbox" name="pizza" value="Pizza">
    Pizza<br>
    <input type="checkbox" name="momo"  value="Momo">
    MOmo<br>
    <input type="checkbox" name="panipuri"  value=" Panipuri">
    Panipuri<br>
   
    <input type="submit" name="submit" value="Submit">
    <!-- here credit_card same so only any one can select ok  -->
  </form>
  
</body>
</html>
<?php
if(isset($_POST["submit"])){
  $food=null;
  if(isset($_POST["pizza"])){//php get name ok 
      $food=$_POST["pizza"];  //name ko value dinxa  $_POST["pizza"] yesle 
      echo "you like ".$food."<br>" ;
      } 
     if(isset($_POST["momo"])){
      $food=$_POST["momo"];   
      echo "you like ". $food ."<br>";
      }
       if(isset($_POST["panipuri"])){
      $food=$_POST["panipuri"];   
      echo "you like ".$food."<br>" ;
      }

      if(empty($_POST["pizza"])){ //empty will not give warning but 
     // $food=$_POST["pizza"];  here we directly try to accesss $_POST["pizza"] which do not exist if unchecked so it give warning
      echo "you dont like pizza <br>" ;
      } 
     if(empty($_POST["momo"])){
      
      echo "you dont like Momo<br>";
      }
       if(empty($_POST["panipuri"])){
       
      echo "you dont like Panipuri<br>" ;
      }
      
     
}
?>