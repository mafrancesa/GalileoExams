<!DOCTYPE html>
<html>
<body>
<h3> PHP Problem - Array 1 </h3>
<?php
$names = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");
$count = array();

foreach($names as $name){
	if(!isset($count[$name])) $count[$name] = 0;
    $count[$name]++;
} //add key-value to new array

arsort($count, SORT_NUMERIC); //get the number of occurences of each element inside the array

$sortedNames = array(); //initialize new array 
foreach($count as $name=>$count) $sortedNames[] = $name; //loop through count array and add name to new array

foreach($sortedNames as $sortedName){
echo "$sortedName ";
} //display sorted names


?>

</body>
</html>
