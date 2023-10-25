14. Remove the email element from the associative array and display the updated array.
<?php
$info=array("name"=>'ri',"age"=>22,"email"=>'ri@gmailcom');
echo"before deleting the email<br/>=";
print_r($info);
echo"<br/>after deleting<br/>";
array_pop($info);
print_r($info);

?>