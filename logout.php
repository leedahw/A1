<?php session_start();
include("includes/standardheader.html");  
 session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="landing page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, landing page">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>LOGOUT</title>
</head>
<body>
    <p>Logout Successful!</p>
    <a href = "landing.php">Back to Home</a> 
</body>
</html>