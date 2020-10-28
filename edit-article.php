<?php session_start();
include('includes/standardheader.html');
if($_SESSION["userType"]=='admin'){

   $articleId = $_GET["articleId"];
//connect to db
	include("includes/dbconfig.php");

    $stmt = $pdo->prepare("SELECT * FROM `article` 
    WHERE `article` . `articleId` = $articleId");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

//show a prefilled form we can edit
?>
<form action="process-edit-article.php" method="POST" enctype="multipart/form-data">
File: <input type="file" name="img" id="img" value="<?php echo($row["img"]);?>"><br/>
<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <form action="process-edit-article.php" method="POST" enctype="multipart/formdata">
        Title: <input type="text" name="title" value="<?php echo($row["title"]);?>"/><br/>
        Author: <input type="text" name="author" value="<?php echo($row["author"]);?>"/><br/>
        <label for= "category">Select Category:</label>
            <select name="category" id="category">
                <option value= "tech">tech</option>
                <option value= "industry">industry</opton>
                <option value= "career">career</option>
            </select><br/>
        <label for= "featured">Set Featured?</label>
            <select name="featured" id="featured">
                <option value= "yes">yes</option>
                <option value="no">no</option>
        </select><br/>
        Preview: <input type="textarea" size="30" name="content" value="<?php echo($row["content"]);?>"/><br/>
        Article Link: <input type="URL" name="articleLink" value="<?php echo($row["articleLink"]);?>"/><br/>
        <input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">
        <input type="hidden" name="featured" value="<?php echo($row["featured"]);?>">
        <input type="submit" value="Confirm Edit"/>
    </form>
    </body>
    </html><?php
}else{
?>
<p>ACCESS DENIED. Admin Acess Only</p>
<a href = "homepage.php">Bcck to Home</a><?php


}
?>