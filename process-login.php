<?php
session_start();
//processing the login.php

//receive input
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row["userType"]=="member"){
    //successful usesrname/pw combo
    $_SESSION["userId"] = $row["userId"];
    header("location:homepage.php");

}elseif{$row["usertype"]=="admin"){
    //admin userType
    $_SESSION["userId"] = $row["userId"];
    header("location: dashboard.php"); 

}else{
    //incorrect username/pw combo
    ?><p>Sorry, Incorrect username/password. Please try again!</p>
        <a href="login.php">Login here</a>
<?php
}
?>
