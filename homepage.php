<?php
include('includes/standardheader.html');
?>
</head>
<h1>WELCOME</h1>
<p>The IMM News Network is a site for students in the Interactive Multimedia Management program at Sheridan College.</p>
<body>
<br/>
<br/>
<?php
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `article`");

$stmt->execute();?>

<a href = "insert-article.php">Add Article</a>

<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {    
echo("<p>");
        echo($row["articleId"]);?><br/><?php
        echo($row["title"]);?><br/>

        ?>
		<a href="edit-article.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a>
		<a href="delete-article.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a>
		<?php
		echo("</p>");
}      
?>

</body>
<br/>
<a href= "logout.php">Logout<a/>
<br/>
<?php
include('includes/cookies.html');
?> 
</html>