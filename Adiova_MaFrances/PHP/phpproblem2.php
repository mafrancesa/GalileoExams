<!DOCTYPE html>
<html>
<body>
<h3> PHP Problem - Loop 2 </h3>
<?php

$x=0; //initialize index
do{
  if ($x % 2 != 0){ //check if index is even
      echo "$x <br>";
  }
$x++; //add 1 to current index
}while ($x < 11) //the code will run while index is less than 11

?>

</body>
</html>
