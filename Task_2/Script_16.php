<?php
$count=0;
$str="welcome my Github Repositories";
$str=strtolower($str);
for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u')
	{
		$count++;
	}
}
echo "number of vowels=",$count;
?>