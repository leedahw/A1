<?php
//process-insert-article.php

//receive input
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$articleLink = $_POST["articleLink"];

//insert a new person record into the person table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `article` 
	(`articleId`, `title`, `author`, `content`, `articleLink`) 
	VALUES (NULL, '$title', '$author', '$content', '$articleLink');");

$stmt->execute();

header("Location: homepage.php");
?>