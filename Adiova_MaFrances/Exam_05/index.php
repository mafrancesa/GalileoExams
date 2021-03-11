<form method="post">
    <h1> Practical Test 5 - Reversed Word </h1>
    <input type="text" name="sampString" id="sample"/>
    <input type="submit" name="submit" id="submit" value="Run" /><br/>
</form>

<?php

if(isset($_POST['submit'])){ //check if the button is clicked
    
    $word = $_POST['sampString']; //get the word that the user wants to check
    echo "Original Word: $word <br>";

    $reverse = strrev($word); //get the reversed string of the given word
    echo "Reversed Word: $reverse <br>";

}

?>