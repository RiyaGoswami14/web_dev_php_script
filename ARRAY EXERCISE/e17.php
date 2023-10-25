17. Add a new city to your travel list from question 16.
<?php
$city=array('KARBALA','NAJAF','TORONTO','BARCELONA');
echo"before adding<br/>";
print_r($city);
echo"<br/>";
array_push($city,'JERUSLEM');
echo"after adding<br/>";
print_r($city);
?>