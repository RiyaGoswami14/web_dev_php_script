20. Reverse the order of the cities in the array from question 19.
<?php
$city=array('KARBALA','NAJAF','TORONTO','BARCELONA');
echo"before rsorting<br/>";
print_r($city);
echo"<br/>";
rsort($city);
echo"after rsorting<br/>";
print_r($city);
?>