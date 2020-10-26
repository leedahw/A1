<?php
//process contact form

//receive input
$name = $_POST["name"];
$emailAddress = $_POST["emailAddress"];
$memberRole = $_POST["memberRole"];
$industry = $_POST["industry"];
$career = $_POST["career"];
$technical = $_POST["technical"];


//this part adds a new member to the 'member' table
$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `contactsubmission` (`submissionId`, `name`, `emailAddress`, `technical`, `industry`, `career`, `memberRole`) 
VALUES (NULL, '$name', '$emailAddress', '$technical', '$industry', '$career', '$memberRole');"
);

$stmt->execute();
?>
<p>Thank you. We'll be in touch!</p>
