<?php
//start session
session_start();
//processing the login

//receive input
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row["userType"]=='admin'){
	//session declarations
	$_SESSION["userId"] = $row["userId"];
	$_SESSION["userType"] = $row["userType"];
	//admin login
	?><p>Welcome Back, Admin!</p>
	<a href="homepage.php">Go to Dashboard</a><?php

}elseif($row["userType"] == 'member'){
	//member login
	?><p>Welcome Back, member!</p>
		<a href="homepage.php">Go to Home</a><?php
}else{
	//incorrect input
	?><p>Incorrect username/password. Please Try Again</p>
	<a href = "login.php">Back to Login</a><?php
}
?>
