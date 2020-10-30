<?php session_start();
//contact-form.php
include("includes/standardheader.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact form to submit. open to public">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, contact, form">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>contact page</title>
</head>
<body>
<h1>CONTACT US</h1>

    <form action = "process-contact-form.php" method = "POST" enctype="multipart/form-data">
    Name: <input type ="text" name ="name" required><br/>
    <br/>
    Email Address: <input type = "email" name ="emailAddress" required><br/>
    <br/>
    Interests:
        <input type = "checkbox" name = "interests[];" value = "tech"><label for = "tech">Tech</label>
        <input type = "checkbox" name = "interests[];" value = "industry"><label for = "industry">Industry</label>
        <input type = "checkbox" name = "interests[];" value = "career"><label for ="career">Career</label><br/>
    <br/>
    Your Role: <br/>
    <select name="userRole" id="userRole">
        <option value = "writer">Writer</option>
        <option value = "contributor">Contributor</option>
        <option value = "administrator">Administrator</option>
    </select>
    <br/>
    <br/>
    <input type = "submit" value="Submit">
    </form>
</body>
</html>