<?php
$password="jabinpass";
$hash=password_hash($password,PASSWORD_DEFAULT);
echo"{$hash}";
if(password_verify("jabinpas",$hash)){
  echo"<br> you logged In <br>";
}
else{
  echo"<br>you failed to login";
}
?>