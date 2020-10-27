<?php session_start();
//delete article
if($_SESSION["userType"] == 'admin'){
//show page
    
//receive GET var
$articleId = $_GET["articleId"];
    
    //get user record form the db table
	include('includes/dbconfig.php');
    
    $stmt = $pdo->prepare("SELECT * FROM `article` 
        WHERE `articleId` = $articleId");
    
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 //show a form with prefilled info
    ?><h2>Are you sure you want to delete the following article?</h2><?php
    echo($row["title"] . "<br/>");
    echo($row["author"] . "<br/>");
    echo($row["content"] . "<br/>");
    echo($row["articleLink"] . "<br/>");
    
?>

    <form action="process-delete-article.php" method="POST">
        <input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">
        <input type="submit" value="CONFIRM DELETE" />
    </form>

<?php
}else{
    //block access?>
    <p>ACCESS DENIED. Admin Access Only.</p>
<a href = "login.php">Back to Login</a>
<?php
}
?>