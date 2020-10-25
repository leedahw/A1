<?php
//processing the login.php
session_start();
//receive input
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `member`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    //successful usesrname/pw combo
    $_SESSION["memberId"] = $row["memberId"];
    ?><p>Sucessful login!</p>
    <a href = "homepage.php"> Go to Home</a><?php
}else{
    //incorrect username/pw combo
    ?><p>Sorry, Incorrect username/password. Please try again!</p>
        <a href="loginPage.php">Login here</a><?php
}
?>
