<!DOCTYPE html>
<html>
<body>
<h3> PHP Problem - Loop 3 </h3>
<?php
$colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
$count = array_count_values($colors); //count the occurences of the color inside the array
$colors = array_keys(array_intersect($count,[1])); //check color if it has only 1 occurence and remove colors with multiple occurence


foreach($colors as $color){
	echo "$color ";

} //display all color inside the array

?>

</body>
</html>
