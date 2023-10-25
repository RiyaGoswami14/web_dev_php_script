10. Sort the array from question 9 in reverse alphabetical order.
<?php
$alpha=array('Z','G','I','A','W');
echo"before rsort<br/>";
print_r($alpha);
echo"<br/>";
rsort($alpha);
echo"after rsorting<br/>";
print_r($alpha);
?>