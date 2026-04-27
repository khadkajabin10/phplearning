<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="radiobuttons.php" method="post">
    
    <input type="radio" name="credit_card" value="Visa">
    Visa<br>
    <input type="radio" name="credit_card"  value="Mastercard">
    Mastercard<br>
    <input type="radio" name="credit_card"  value="American Express">
    American Express<br>
   
    <input type="submit" name="confirm" value="confirm">
    <!-- here credit_card same so only any one can select ok  -->
  </form>
  
</body>
</html>
<?php
if(isset($_POST["confirm"])){
  $credit_card=null;
  if(isset($_POST["credit_card"])){
      $credit_card=$_POST["credit_card"]; //give value of that key credit_card  i.e Visa or Mastercard, or American Express 
      echo $credit_card ;
      } else{
        echo "Please make a selection";
      }
}
?>