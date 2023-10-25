<?php
$i1=array("a"=>"rose","b"=>"daisy","c"=>"sunflower","d"=>"lily");
$i2=array("a"=>"lotus","b"=>"Jasmine");
array_splice($i1,0,2,$i2);
print_r($i1);

?>