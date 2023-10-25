<?php
$numbers=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($numbers));
unset($numbers[2]);
echo"<br/>";
echo"numbers inn the array after deleting the 2 index<br/>";
print_r($numbers);
?>