<?php 
//homepage.php
session_start();
if(isset($_SESSION["userId"])){
    include("includes/standardheader.html");

//show the homepage
?>
<h1>IMM NEWS NETWORK</h1>

<p>The IMM News Network is a site for students in the Interactive Multimedia Management program at Sheridan College.</p>

    <a href = "view-contact.php">View Contact</a>

<br/>
<br/>
<h2>Featured Article</h2>
<iframe src ="<?php echo($row["featured"] == 'yes')?> width="600" height ="400"></iframe>
<br/>

<h2>Articles</h2>
<br/>
    <!-- <a href = "insert-article.php">Add Article</a>
    <br/>
    <br/>
    <nav>
        <a href = "articles/career1.php">Career Article 1</a>
        <a href = "articles/career2.php">Career Article 2</a>
        <a href = "articles/industry1.php">Industry Article 1</a>
        <a href = "articles/industry2.php">Industry Article 2</a>
        <a href = "articles/technical1.php">Technical Article 1</a>
        <a href = "articles/techincal2.php">Technical Article 2</a>
    </nav> -->
    <a href = "articles-tech.php">Tech Articles</a>  
    <a href = "articles-industry.php">Industry Articles</a>  
    <a href = "articles-career.php">Career Articles</a> 
<?php
//get records from db vv
include("includes/dbconfig.php");


$stmt = $pdo->prepare("SELECT * FROM `article`");

$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
    echo("<h4>");
    echo($row["title"]);
    echo("</h4>");

    echo("<p>");?>
    <label>By: </label><?php
    echo($row["author"]);?><br/>
    <label>Category: </label><?php
    echo($row["category"]);?><br/><br/><?php
    echo($row["content"]);
    echo("</p>");?>

    <a href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>


	<a href="edit-article.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a>
	<a href="delete-article.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a><?php
}
?>
</body>


<?php
include('includes/cookies.html');

 }else{?>
    <p>ACCESS DENIED. Please Login</p>
    <a href = "login.php">Back to Login</a>
<?php
}
?> 

</html>