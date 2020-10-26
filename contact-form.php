<?php
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
    Category:
        <input type="hidden" name="technical" value=" " /> 
        <input type = "checkbox" name = "technical" value = "technical"><label for = "technical">Technical</label>
        <input type="hidden" name="industry" value=" " />
        <input type = "checkbox" name = "industry" value = "industry"><label for = "industry">Industry</label>
        <input type="hidden" name="career" value=" " />
        <input type = "checkbox" name = "career" value = "career"><label for ="career">Career</label><br/>
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