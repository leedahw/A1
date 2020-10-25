<?php
//processSignupPage.php

//receive input
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];
$DOB = $_POST["DOB"];

//this part adds a new member to the 'member' table
$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `member` 
	(`memberId`, `fName`, `lName`, `emailAddress`, `password`, `DOB`) 
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password', '$DOB');");

$stmt->execute();
?>
<p>Thank you for signing up!</p>
<a href="loginPage.php">Go to Login</a>