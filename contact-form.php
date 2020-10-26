<?php session_start();
//contact-form.php
?>

<h1>CONTACT US</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<body>
    <form action = "process-contact-form.php" method = "POST" enctype="multipart/form-data">
    Name: <input type ="text" name ="name" required><br/>
    <br/>
    Email Address: <input type = "email" name ="emailAddress" required><br/>
    <br/>
    Interests:
        <input type = "checkbox" name = "interests[];" value = "technical"><label for = "technical">Technical</label>
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