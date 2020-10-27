<?php
session_start();
//process-edit-about.php

$content = $_POST["content"];

//update about record (row) with edit about data
include('includes/dbconfig.php');

$stmt = $pdo->prepare("UPDATE `about` SET `content` = '$content'
WHERE `about`.`aboutId` = 1 ;");

$stmt->execute();

header("Location: about.php");
?>