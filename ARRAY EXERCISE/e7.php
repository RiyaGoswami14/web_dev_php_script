7. Remove the last number from the array created in question 5.
<?php
$numbers=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($numbers));
array_pop($numbers);
echo"<br/>";
echo"numbers inn the array after deleting the lastone<br/>";
print_r($numbers);
?>