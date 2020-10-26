<?php
include('includes/standardheader.html');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<h1>ABOUT</h1>
</head>
</html>

<?php
	include('includes/dbconfig.php');

	$stmt = $pdo->prepare("SELECT * FROM `about`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     
		//print_r($row); // recursively print out object.
		echo("<p>");
		echo($row["content"]); //or $row[0];
		?>
		<a href="edit-about.php<?php echo($row["content"]); ?>"><br/>Edit</a>
		<?php
		echo("</p>");
	}
?>