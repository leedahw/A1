<?php
session_start();
if(isset($_SESSION["isAdmin"])=="yes"){
	$_SESSION["isAdmin"] = $row["isAdmin"];
	//allowed to see this page
	//insertArticle.php
	?>
	<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<form action="processingInsertArticle.php" method="POST">
		Title: <input type="text" name="title" /><br/>
		Author: <input type="text" name="author" /><br/>
		Preview: <input type="text area" name="content" /><br/>
		Link: <input type="URL" name="articleLink" /><br/>
		<input type="submit" />
	</form>
	</body>
	</html><?php
}else{
	//DO NOT SHOW this page
	?>
	<p>ACCESS DENIED. Please login here:</p>
	<a href="loginPage.php">Login page</a><?php
}
?>
 