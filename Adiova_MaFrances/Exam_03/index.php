<form method="post">
    <h1> Practical Test 3 - Fibonacci Check </h1>
    <input type="text" name="num" id="sample"/>
    <input type="submit" name="submit" id="submit" value="Run" /><br/>
</form>

<?php

function isFibonacci($number) {
    $sqr1 = 5*pow($number, 2) + 4; 
    $sqr2 = 5*pow($number, 2) - 4;
    if(sqrt($sqr1) == floor(sqrt($sqr1)) or sqrt($sqr2) == floor(sqrt($sqr2))){ //Checks if the answer to equation is a perfect square
        echo "$number is a Fibonacci Number <br> ";
    } else {
        echo "$number is not a Fibonacci Number <br>";
    }
        
}

if(isset($_POST['submit'])){ //check if the button is clicked
    
    $num = $_POST['num']; //get the value of text area
    if(is_numeric($num)){ //Check if the input is a number
        echo "Check if 1 - $num is Fibonacci Number <br> ";

        $index = 1; //starting point
        while ($index < $num + 1) { //loops through the number from 1-N
           
            isFibonacci($index);
            $index++; //add 1 to the current value of x
        }
        
    }
    else {
        echo "Insert a Valid Number.";
    }
    

   
}

?>