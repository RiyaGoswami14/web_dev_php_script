
<?php 
    
// Declaring an array 
$arr = array(); 
  
// Adding the first element 
array_push($arr, 21, 22, 23, 24, 25); 
  
print_r("Array after multiple insertions </br>"); 
print_r($arr); 
array_pop($arr); 
  
// Single array pop 
print_r("</br>Array after a single pop </br>"); 
print_r($arr); 
  
?>