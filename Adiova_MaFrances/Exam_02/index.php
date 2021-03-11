<h3> Practical Test 2 - File Creation </h3>

<?php
$fileName = "hello_there.php"; 
$newFile = fopen($fileName, 'w+'); //open or create new file if the file does not exist
$content = "<?php 

// This is a comment

echo \"This is a testpage!\";
echo \"Exam number two!\";

// This is the end of a comment

?>"; //this is the file content

fwrite($newFile, $content); //writes the content to file
echo "<a href=\"hello_there.php\"> Go to $fileName </a>"; //links to the created file
fclose($newFile);
?>