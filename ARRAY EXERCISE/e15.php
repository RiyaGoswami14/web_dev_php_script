15. Create a multidimensional array to store information about movies, including title, director, and
release year for at least two movies. Display the information for one of the movies.
<?php
$movies=array(
    array("title"=>'SITA-RAMAM',"director"=>'HANU RAGHAVAPUDI',"release_year"=>2023),
    array("title"=>'CHHICHHORE',"director"=>'NITESH TIWARI',"release_year"=>2019),
);
print_r($movies[1]);

?>
