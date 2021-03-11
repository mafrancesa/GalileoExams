<form method="post">
    <h1> Practical Test 4 - Date Difference </h1>
    <p> Date Format: Y-m-d </p>
    <label for="date1">Date 1: </label>
    <input type="text" name="date1" id="date1"/>
    <label for="date2">Date 2: </label>
    <input type="text" name="date2" id="date2"/>
    <input type="submit" name="submit" id="submit" value="Run" /><br/>
</form>

<?php
function validateDate($date){
    $dateArray = explode('-', $date); //put date to array
    return checkdate($dateArray[1], $dateArray[2], $dateArray[0]); //return if date is valid using php checkdate function

}

if(isset($_POST['submit'])){ //check if the button is clicked
    
    $date1 = $_POST['date1']; //date the value of date1
    $date2 = $_POST['date2'];  //get the value of date2
    
    echo "Date 1: $date1 <br> Date 2: $date2 <br> ";

    if (validateDate($date1) == true and validateDate($date2) == true){ //check if the date is valid by calling validateDate function

        $diffDate = date_diff(date_create($date1), date_create($date2)); //get the difference of the 2 dates
        echo $diffDate->format('%Y years, %m months, %d days'); //format and display the interval to Y, m, d
    } else {
        echo "Input a valid Date";

    }

}

?>