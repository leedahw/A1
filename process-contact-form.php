<?php
//process contact form

//receive input
$name = $_POST["name"];
$emailAddress = $_POST["emailAddress"];
$userRole = $_POST["userRole"];
$industry = $_POST["industry"];
$career = $_POST["career"];
$technical = $_POST["technical"];


//this part adds a new user to the 'user' table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `contactsubmission` (`submissionId`, `name`, `emailAddress`, `technical`, `industry`, `career`, `userRole`) 
VALUES (NULL, '$name', '$emailAddress', '$technical', '$industry', '$career', '$userRole');"
);

$stmt->execute();
?>
<p>Thank you. We'll be in touch!</p>
<a href = "homepage.php">Back to Home</a>
