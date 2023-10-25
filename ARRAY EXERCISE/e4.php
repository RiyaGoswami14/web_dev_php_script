4. Check if the color "Green" exists in the array from question 1.
<?php
$color= array('black', 'gray','white','nude pitch');
array_push($color,'yellow');

if (in_array("Green", $color))
  {
  echo "color founded";
  }
else
  {
  echo "there is no color that mentioned above";
  }
?>