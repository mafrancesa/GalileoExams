
<html>
<body>
<h3> PHP Problem - Loop 1 </h3>
<?php

$x=0; //initialize index
$sum=0; //initialize sum
while ($x < 11){
 if ($x % 2 == 0) { //check if the index is even
 $sum = $sum + $x; //add the value of index to sum
	}
 $x++; //add 1 to the current index
} //run while the index is less than 11
echo "The sum of all even number in 0-10 is $sum"
?>

</body>
</html>
