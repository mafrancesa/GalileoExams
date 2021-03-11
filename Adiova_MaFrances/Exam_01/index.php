<form method="post">
    <h3> Practical Test 1 - Palindrome Check </h3>
    <input type="text" name="sampString" id="sample"/>
    <input type="submit" name="submit" id="submit" value="Run" /><br/>
</form>

<?php

if(isset($_POST['submit'])){ //check if the button is clicked
    
    $word = $_POST['sampString']; //get the word that the user wants to check
    echo "Original Word: $word <br>";

    $reverse = strrev($word); //get the reversed string of the given word
    echo "Reversed Word: $reverse <br>";

    if (strtolower($word) == strtolower($reverse)){ //converts the word to lower case and compare if the reversed and the original word is the same
        echo "$word is a Palindrome";
    } else {
        echo "$word is not a Palindrome";
    }
}

?>