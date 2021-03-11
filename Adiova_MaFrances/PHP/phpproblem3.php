<!DOCTYPE html>
<html>
<body>
<h3> PHP Problem - Loop 3 </h3>
<?php

$a = 0; //initialize the first digit on fibonacci series
$b = 1; //initialize the second digit on fibonacci series

echo "$a <br> $b <br>"; //display first and second digit
for ($x = 0; $x < 8 ; $x++) //initialize index, check if index is less than 8 because, add 1 to index after running the code inside the for loop

{
	
	$fib = $a + $b; //add 2 numbers to get the next digit on the series
    echo "$fib <br>"; //display the next digit
    
    $a = $b; //change value of the a variable
    $b = $fib; //change value of the b variable
}

?>

</body>
</html>
