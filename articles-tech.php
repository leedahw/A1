<?php session_start();
if(isset($_SESSION["userId"])){
    include("includes/standardheader.html");

    //get records from db vv
include("includes/dbconfig.php");


$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'tech'");

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

<?php
}
}else{?>
    <p>ACCESS DENIED. Please Login</p>
    <a href = "login.php">Back to Login</a>

<?php
}
?> 