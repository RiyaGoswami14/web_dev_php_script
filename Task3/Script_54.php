<?php
// Array representing a possible record set returned from a database
$records = array(array('id' => 1234,'first_name' => 'Harry','last_name' => 'Potter',),
    array('id' => 2341,'first_name' => 'Hermione','last_name' => 'Granger',),
    array('id' => 4312,'first_name' => 'Ron','last_name' => 'Weasley',),
    array('id' => 3214,'first_name' => 'Draco','last_name' => 'Malfoy',)
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);

?>