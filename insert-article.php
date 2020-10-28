<?php
session_start();
include('includes/standardheader.html');
if($_SESSION["userType"]=='admin'){
//allowed to see this page
//insert-article.php

?>
<form action="process-insert-article.php" method="POST" enctype="multipart/form-data">
Image: <input type="file" name="img" id="img" required/><br/><br/>
<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<form action="process-insert-article.php" method="POST" enctype = "multipart/form-data">
		Title: <input type="text" name="title" /><br/><br/>
		Author: <input type="text" name="author" /><br/><br/>
		Preview: <input type="text" name="content" /><br/><br/>
		Category: <select name="category" id="category">
			<option value = "tech">tech</option>
			<option value = "industry">industry</option>
			<option value = "career">career</option>
			</select><br/><br/>
		Featured: <select name="featured" id="featured">
			<option value = "yes">yes</option>
			<option value = "no">no</option>
		</select><br/><br/>
		Link: <input type="URL" name="articleLink" /><br/><br/>
		<input type="submit" value = "Submit" />
	</form>
	</body>
    </html><?php
}else{    
	//DO NOT SHOW this page
	?>
	<p>ACCESS DENIED. Admin Access Only</p>
    <a href="login.php">Login page</a><?php
}
?>