<?php
session_start();
if($_SESSION["userType"]=='admin'){
//receive  var
$aboutId = $_GET["aboutId"];

//connect to db
	include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `about`");

$stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
//echo($row["content"]);

//show a prefilled form we can edit
?>
<form action="process-edit-about.php" method="POST">
	<input type="text" name="content" value="<?php echo($row["content"]);?>"/>
    <input type="hidden" name ="aboutId" value="<?php echo($row["aboutId"]);?>">
    <input type="submit" value = "CONFIRM EDIT"/>
</form>
<?php 
}else{
    //do not show?>
    <p>ACCESS DENIED</p>
    <a href = "about.php">Go</a><?php


}
?>