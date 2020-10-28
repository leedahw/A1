<?php 
//insert-edit-article
session_start();
if ($_SESSION["userType"]=='admin'){
//show page
//receive POST data from edit-article
$title = $_POST["title"];
$author = $_POST["author"];
$category = $_POST["category"];
$content = $_POST["content"];
$articleLink = $_POST["articleLink"];
$featured = $_POST["featured"]
$articleId = $_POST["articleId"];

//connect to db
include("includes/dbconfig.php");

//update db with declared var
$stmt = $pdo->prepare("UPDATE `article` 
SET `title`='$title' , `author`='$author' , `category`='$category' , `content`='$content' , `articleLink`='$articleLink', `featured`='$featured' 
WHERE `article` . `articleId` = $articleId");

$stmt->execute();
?>

<p>Edit Submitted</p>
<a href = "homepage.php">Back to Home</a>
<?php

}else{
?>
<p>ACCESS DENIED. Admin Access Only.</p>
<a href = "login.php">Back to Login</a>
<?php

}
?>
