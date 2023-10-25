<?php
$numbers = array(5, 6, 2, 22,34);
sort($numbers);

foreach ($numbers as $key => $val) {
    echo "numbers[" . $key . "] = " . $val . "<br>";
}

?>

