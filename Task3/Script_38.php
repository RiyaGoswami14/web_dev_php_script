<?php
$array = array(1, 2, 3, 4, 5);

$first_element = array_shift($array);

echo "Removed element: " . $first_element . PHP_EOL;
print_r($array);


$array = array(1, 2, 3, 4, 5);

$new_length = array_unshift($array, 0);

echo "</br>New length of array: " . $new_length . PHP_EOL;
print_r($array);

?>