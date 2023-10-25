9. Sort an array of words in alphabetical order.
<?php
$alpha=array('Z','G','I','A','W');
echo"before sort<br/>";
print_r($alpha);
echo"<br/>";
sort($alpha);
echo"after sorting<br/>";
print_r($alpha);
?>