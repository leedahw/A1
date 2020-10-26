<?php
//edit-about.php

//receive GET variables
$personId = $_GET["personId"];

//get person record form the database table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `about` 
	WHERE `personId` = $personId");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo($row["firstName"]);
echo($row["lastName"]);

//show a form with prefilled info that we can change
?>
<form action="process-edit-person.php" method="POST">
	firstName: <input type="text" name="firstName" value="<?php echo($row["firstName"]);?>"/>
	lastName: <input type="text" name="lastName" value="<?php echo($row["lastName"]);?>"/>
	emailAddress: <input type="text" name="emailAddress" value="<?php echo($row["emailAddress"]);?>"/>
	DOB: <input type="text" name="DOB" value="<?php echo($row["DOB"]);?>"/>
	<input type="hidden" name="personId" value="<?php echo($row["personId"]);?>">
	<input type="submit" />
</form>