<?php 
//homepage.php
session_start();
if(isset($_SESSION["userId"])){
    include("includes/standardheader.html");

$articleId = $_GET["articleId"];
//get records from db vv
include("includes/dbconfig.php");


$stmt = $pdo->prepare("SELECT * FROM `article`
WHERE `articleId` = $articleId");

$stmt->execute();

$row = $stmt->fetch(PDO:: FETCH_ASSOC);?>
    <img src = "uploads/<?php echo($row["img"]);?>" alt="img" width= "600"/><?php
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

    <a href = "<?php echo($row["articleLink"]);?>" target = "_blank">See Full Article</a><br/>

    <?php 
    $stmt = $pdo->prepare("SELECT count(*) FROM `likes` 
    WHERE `likes` . `articleId` = $articleId");
    
    $stmt->execute();
    $row = $stmt->fetchColumn();?>

    <p><?php echo $row?> people like this</p>

    <form action = "like.php" method="POST" enctype="multipart/form-data">
    <input type = "hidden" name="articleId" value = "<?php echo($articleId);?>">
    <input type = "submit" name="like" value = "Like"/>
    </form>

    <form action = "unlike.php" method="POST" enctype="multipart/form-data">
    <input type = "hidden" name="articleId" value = "<?php echo($articleId);?>">
    <input type = "submit" name="unlike" value = "Unlike"/>
    </form>

   


<?php
 }else{?>
    <p>ACCESS DENIED. Please Login</p>
    <a href = "login.php">Back to Login</a>
<?php
}
?> 

</html>