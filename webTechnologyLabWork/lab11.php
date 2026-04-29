<?php  
$filename = "example.txt"; 
$content = file_get_contents($filename); 
$newContent = str_replace("old_text", "new_text", $content); 
file_put_contents($filename, $newContent); 
echo "File updated successfully"; 
?>  