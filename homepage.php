<?php
include ('standardheader.html');
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

$stmt->execute();

echo("<p>");
		echo($row["articleId"]." ".$row["title"]." ".$row["author"]." ".$row["content"]); 
		?>
		<a href="editarticle.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a>
		<a href="deletearticle.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a>
		<?php
        echo("</p>");      
?>

</body>
<br/>
<?php
include ('cookies.html');
?> 
</html>