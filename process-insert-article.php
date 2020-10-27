<?php 
session_start();
if($_SESSION["userType"]=='admin'){
//process-insert-article.php

//declare and receive input
$category = $_POST["category"];
$title = $_POST["title"];
$author = $_POST["author"];
$cateory = $_POST["category"];
$content = $_POST["content"];
$articleLink = $_POST["articleLink"];

//insert a new person record into the person table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `article` 
	(`articleId`, `title`, `author`,  `category`, `content`, `articleLink`) 
	VALUES (NULL, '$title', '$author', '$category', '$content', '$articleLink');");

$stmt->execute();
?>
<p>Success!</p><?php

//header("Location: homepage.php");
}else{
	//do not show?>
<p>ACCESS DENIED.Admin Access Only.</p>
<a href = "homepage.php">Back to Login</p><?php
}
?>