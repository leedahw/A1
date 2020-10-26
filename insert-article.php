<?php
session_start();
if($row["userType"]==admin){
	//allowed to see this page
	//add-article.php
?><!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<form action="process-insert-article.php" method="POST">
		Title: <input type="text" name="title" />
		Author: <input type="text" name="author" />
		Preview: <input type="text" name="content" />
		Link: <input type="URL" name="articleLink" />
		<input type="submit" />
	</form>
	</body>
    </html><?php
}else{    
	//DO NOT SHOW this page
	?>
	<p>ACCESS DENIED. Please login here:</p>
    <a href="login.php">Login page</a><?php
}
?>