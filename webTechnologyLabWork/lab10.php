 
<html> 
 
 <head> 
  <title>Form Example</title> 
 </head> 
 
 <body> 
 
  <form method="post"> 
 
   <!-- Textbox --> 
   Name: <input type="text" name="name"><br><br> 
 
   <!-- Radio buttons --> 
   Gender: 
   <input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> 
Female<br><br> 

Hobbies: <br>
<input type="checkbox" name="hobbies[]" value="Reading">Reading  <br>
<input type="checkbox" name="hobbies[]" value="Music">Music  <br>
<input type="checkbox" name="hobbies[]" value="Sports">Sports <br>
<input type="submit" value="Submit"> 
</form> 
</body> 
</html>  
<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$name = $_POST["name"]; 
$gender = $_POST["gender"];    
  $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : []; 
 
  echo "<h3>Submitted Data</h3>"; 
  echo "Name: " . $name . "<br>"; 
  echo "Gender: " . $gender . "<br>"; 
 
  echo "Hobbies: "; 
 
  if (!empty($hobbies)) { 
   echo implode(", ", $hobbies); 
  } else { 
   echo "None"; 
  } 
 } 
 
?> 