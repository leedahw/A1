<?php session_start();
//articles-career
    include("includes/standardheader.html");
?>
    <h2>Career Articles</h2>
<?php
    //get records from db vv
include("includes/dbconfig.php");


$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article` . `category` = 'career'");

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
<?php
}
?>
