11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.
<?php
$fruit=array('mango','apple');
print_r($fruit);
echo"<br/>";
$veggies=array('garlic','ginger');
print_r($veggies);
echo"<br/>";
echo"mergging both array ";
print_r(array_merge($fruit,$veggies));
?>