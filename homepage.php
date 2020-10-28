<?php 
//homepage.php
session_start();
if(isset($_SESSION["userId"])){
    include("includes/standardheader.html");

//show the homepage
    include("includes/dbconfig.php");
?>
<h1>IMM NEWS NETWORK</h1>

<p>The IMM News Network is a site for students in the Interactive Multimedia Management program at Sheridan College.</p>

    <a href = "view-contact.php">View Contact</a>

<br/>
<br/>
<h2>Featured Article</h2>
<?php 
$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article`.`featured` = 'yes'");

$stmt->execute();

while($row = $stmt->fetch(PDO:: FETCH_ASSOC)) {
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

    <a href = "<?php echo($row["articleLink"]); ?>" target="_blank">See Full Article</a><br/><?php
}
?> 
<br/>

<h2>Articles</h2>
<br/>
<a href = "insert-article.php">Add Article</a>
<br/>
<br/>
    <a href = "articles-tech.php">Tech Articles</a>  
    <a href = "articles-industry.php">Industry Articles</a>  
    <a href = "articles-career.php">Career Articles</a> 
<?php
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
    <a href = "view-article.php?articleId=<?php echo($row["articleId"]);?>">Read More</a><br/>
    <a href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>


	<a href="edit-article.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a>
    <a href="delete-article.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a>
    <br/><br/>
    <?php
}
?>
</body>
<br/>
<br/>
<table>
    <tr>
        <th>Monthly Visitors: <th/>
        <th>October -</th>
        <td>17</td>
        <th>September -</th>
        <td>30</td>
        <th>August -</th>
        <td>7</td>
        <th>July -</th>
        <td>58</td>
        <th>June -</th>
        <td>22</td>
        <th>May -</th>
        <td>31</td>
    <tr/>
</table>
<?php
include('includes/cookies.html');

 }else{?>
    <p>ACCESS DENIED. Please Login</p>
    <a href = "login.php">Back to Login</a>
<?php
}
?> 
