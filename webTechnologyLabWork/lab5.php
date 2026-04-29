<?php 
 
class Book { 
public $title; 
public $author; 
public function __construct($title, $author) { 
$this->title = $title; 
$this->author = $author; 
} 

public function displayInfo() { 
echo "Title: " . $this->title . "<br>"; 
echo "Author: " . $this->author . "<br><br>"; 
} 
} 
// Creating objects with new data 
$book1 = new Book("Clean Code", "Robert C. Martin"); 
$book2 = new Book("Design Patterns", "Erich Gamma"); 
// Display book details 
$book1->displayInfo(); 
$book2->displayInfo(); 
echo"<br>Programmed by Jabin Khadka";
?>  