<!DOCTYPE html>
<html>
<body>
<h3> PHP Problem - Loop 2 </h3>
<?php
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
$newNums = array();

foreach($numbers as $num){
	if($num % 2 != 0){ //check if the number is odd
       $num = round($num, -1); //round number to nearest tens
       array_push($newNums, $num); //add number to newNums array
       
    }
  	else {
    	array_push($newNums, $num);
    }
}

sort($newNums); //sort the numbers inside newNums on ascending order

foreach($newNums as $newNum){
	echo "$newNum ";
} //display all number inside newNums array

?>

</body>
</html>
