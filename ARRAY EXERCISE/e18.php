18. Remove a city of your choice from the array and display the updated list.
<?php
$city=array('KARBALA','NAJAF','TORONTO','BARCELONA');
echo"before deleting<br/>";
print_r($city);
echo"<br/>";
unset($city[2]);
echo"after deleting<br/>";
print_r($city);
?>