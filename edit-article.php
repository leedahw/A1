<?php session_start();
if($_SESSION["userType"]=='admin'){

   $articleId = $_GET["articleId"];
//connect to db
	include("includes/dbconfig.php");

    $stmt = $pdo->prepare("SELECT * FROM `article`
    WHERE `articleId` = $articleId");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
// echo($row["title"]);
// echo($row["author"]);
// echo($row["content"]);
// echo($row["articleLink"]);

//show a prefilled form we can edit
?>
<form action="process-edit-article.php" method="POST">
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
</select>
	Preview: <input type="textarea" size="30" name="content" value="<?php echo($row["content"]);?>"/><br/>
	Article Link: <input type="text" name="articleLink" value="<?php echo($row["articleLink"]);?>"/>
	<input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">
	<input type="submit" />
</form><?php
}else{
?>
<p>ACCESS DENIED. Admin Acess Only</p>
<a href = "homepage.php">Bcck to Home</a><?php


}
?>