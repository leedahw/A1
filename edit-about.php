<?php
?>
<h1>ABOUT US</h1>
<br/>
<?php
//receive GET var
$content = $_GET["content"];

//connect to db
	include('includes/dbconfig.php');

    $stmt = $pdo->prepare("SELECT * FROM `about`
    WHERE `content` = $content");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
echo($row["content"]);

//show a prefilled form we can edit
?>
<form action="process-edit-about.php" method="POST">
	content: <input type="text" name="content" value="<?php echo($row["content"]);?>"/>
    <input type="hidden" name="content" value="<?php echo($row["content"]);?>">
	<input type="submit" />
</form>