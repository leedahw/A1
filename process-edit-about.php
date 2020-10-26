<?php
//process-edit-about.php

//receive POST data from edit-form
$content = $_POST["content"];

include('includes/dbconfig.php');

$stmt = $pdo->prepare("UPDATE `about` 
	SET `content` = '$content'
	WHERE `about`.`content` = $content;");

$stmt->execute();

header("Location: homePage.php");
?>